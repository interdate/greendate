<?php 

namespace AppBundle\Security;

use Symfony\Component\Security\Core\Authentication\SimplePreAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use function PhotoAlbum\array_to_table;

class ApiAuthenticator implements SimplePreAuthenticatorInterface, AuthenticationFailureHandlerInterface
{
	protected $userApiProvider;
	protected $encoder;

	public function __construct(ApiUserProvider $userApiProvider, UserPasswordEncoderInterface $encoder)
	{		
		$this->userApiProvider = $userApiProvider;
		$this->encoder = $encoder;
	}

	public function createToken(Request $request, $providerKey)
	{
        $username = $request->headers->get('php-auth-user',false);
        $password = $request->headers->get('php-auth-pw', false);
		 
		if (!$username or !$password) {
			throw new BadCredentialsException('401 Unauthorized');
			// or to just skip api key authentication
			// return null;
		}
		//$this->password = $password;

		return new PreAuthenticatedToken(
			'anon.',
            array($username,$password),
            $providerKey
		);
	}

	public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
	{
        $credentials = $token->getCredentials();

		//$username = $this->userApiProvider->getUsernameForUserIdAndApiKey($this->userId, $apiKey);

		if (!$credentials or !is_array($credentials)) {
			throw new AuthenticationException(
				sprintf('API Key "%s" does not exist.', $credentials)
			);
		}
        $username = $credentials[0];
		$password = $credentials[1];

		$user = $this->userApiProvider->loadUserByUsername($username);
        //var_dump($credentials);die;
        if(!$user->getIsActive()){
            $user = null;
            throw new AuthenticationException('משתמש לא פעיל על ידי מנהל מערכת');
        }else{
            if($user) {
                $passwordValid = $this->encoder->isPasswordValid($user, $password);
                if ($passwordValid or $user->getFacebook() == $password) {

                    return new PreAuthenticatedToken(
                        $user,
                        array($username, $password),
                        $providerKey,
                        $user->getRoles()
                    );
                }
            }
            throw new AuthenticationException('שם משתמש או סיסמא לא חוקיים');
        }
	}

	public function supportsToken(TokenInterface $token, $providerKey)
	{
		return $token instanceof PreAuthenticatedToken && $token->getProviderKey() === $providerKey;
	}
	
	public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
	{		
		return new Response("Authentication Failed.", 403);
	}
}
