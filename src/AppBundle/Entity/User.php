<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\Criteria;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="users")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     **/
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=20)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="Gender", inversedBy="users")
     * @ORM\JoinColumn(name="gender_id", referencedColumnName="id")
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity="Gender", inversedBy="lookingGenderUsers")
     * @ORM\JoinColumn(name="looking_gender_id", referencedColumnName="id")
     */
    private $lookingGender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="users")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sent_email", type="boolean")
     */
    protected $isSentEmail = true;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="users")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity="RelationshipStatus", inversedBy="users")
     * @ORM\JoinColumn(name="relationship_status_id", referencedColumnName="id")
     */
    private $relationshipStatus;

    /**
     * @ORM\ManyToOne(targetEntity="Occupation", inversedBy="users")
     * @ORM\JoinColumn(name="occupation_id", referencedColumnName="id")
     */
    private $occupation;

    /**
     * @ORM\ManyToOne(targetEntity="Education", inversedBy="users")
     * @ORM\JoinColumn(name="education_id", referencedColumnName="id")
     */
    private $education;

    /**
     * @ORM\ManyToOne(targetEntity="Religion", inversedBy="users")
     * @ORM\JoinColumn(name="religion_id", referencedColumnName="id")
     */
    private $religion;

    /**
     * @ORM\ManyToOne(targetEntity="ReligionAffinity", inversedBy="users")
     * @ORM\JoinColumn(name="religion_affinity_id", referencedColumnName="id")
     */
    private $religionAffinity;

    /**
     * @ORM\ManyToOne(targetEntity="SexOrientation", inversedBy="users")
     * @ORM\JoinColumn(name="sex_orientation_id", referencedColumnName="id")
     */
    private $sexOrientation;

    /**
     * @ORM\ManyToMany(targetEntity="Purpose", inversedBy="users")
     * @ORM\JoinTable(name="users_purposes")
     **/
    private $purposes;

    /**
     * @ORM\ManyToMany(targetEntity="VeggieReason", inversedBy="users")
     * @ORM\JoinTable(name="users_veggie_reasons")
     **/
    private $veggieReasons;

    /**
     * @ORM\ManyToMany(targetEntity="Interest", inversedBy="users")
     * @ORM\JoinTable(name="users_interests")
     **/
    private $interests;

    /**
     * @ORM\OneToMany(targetEntity="Payment", mappedBy="user")
     * @ORM\OrderBy({"nextPaymentDate" = "DESC"})
     **/
    private $payments;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text")
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="looking", type="text")
     */
    private $looking;

    /**
     * @ORM\ManyToOne(targetEntity="Nutrition", inversedBy="users")
     * @ORM\JoinColumn(name="nutrition_id", referencedColumnName="id")
     */
    private $nutrition;

    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="users")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Smoking", inversedBy="users")
     * @ORM\JoinColumn(name="smoking_id", referencedColumnName="id")
     */
    private $smoking;

    /**
     * @ORM\ManyToOne(targetEntity="Drinking", inversedBy="users")
     * @ORM\JoinColumn(name="drinking_id", referencedColumnName="id")
     */
    private $drinking;

    /**
     * @ORM\ManyToOne(targetEntity="Sport", inversedBy="users")
     * @ORM\JoinColumn(name="sport_id", referencedColumnName="id")
     */
    private $sport;

    /**
     * @ORM\ManyToOne(targetEntity="Green", inversedBy="users")
     * @ORM\JoinColumn(name="green_id", referencedColumnName="id")
     */
    private $green;

    /**
     * @ORM\ManyToOne(targetEntity="Children", inversedBy="users")
     * @ORM\JoinColumn(name="children_id", referencedColumnName="id")
     */
    private $children;


    /**
     * @ORM\ManyToMany(targetEntity="Animal", inversedBy="users")
     * @ORM\JoinTable(name="users_animals")
     */
    private $animals;

    /**
     * @ORM\ManyToOne(targetEntity="PoliticalAffiliation", inversedBy="users")
     * @ORM\JoinColumn(name="political_affiliation_id", referencedColumnName="id")
     */
    private $politicalAffiliation;


    private $zodiac;

    /**
     * @var float
     *
     * @ORM\Column(name="height", type="float")
     */
    private $height;

    /**
     * @ORM\ManyToOne(targetEntity="Body", inversedBy="users")
     * @ORM\JoinColumn(name="body_id", referencedColumnName="id")
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity="Eyes", inversedBy="users")
     * @ORM\JoinColumn(name="eyes_id", referencedColumnName="id")
     */
    private $eyes;

    /**
     * @ORM\ManyToOne(targetEntity="Hair", inversedBy="users")
     * @ORM\JoinColumn(name="hair_id", referencedColumnName="id")
     */
    private $hair;

    /**
     * @ORM\ManyToOne(targetEntity="LoginFrom", inversedBy="users")
     * @ORM\JoinColumn(name="login_from_id", referencedColumnName="id")
     */
    private $loginFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="perfect_date", type="string", length=255, nullable=true)
     */
    private $perfectDate;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_dish", type="string", length=255, nullable=true)
     */
    private $favoriteDish;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_restaurant", type="string", length=255, nullable=true)
     */
    private $favoriteRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="dinner_with", type="string", length=255, nullable=true)
     */
    private $dinnerWith;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_books", type="string", length=255, nullable=true)
     */
    private $favoriteBooks;

    /**
     * @var string
     *
     * @ORM\Column(name="music", type="string", length=255, nullable=true)
     */
    private $music;

    /**
     * @ORM\OneToMany(targetEntity="Photo", mappedBy="user", cascade={"remove"}, orphanRemoval=true)
     */
    private $photos;


    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="owner", cascade={"remove"}, orphanRemoval=true)
     */
    private $notes;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="member", cascade={"remove"}, orphanRemoval=true)
     */
    private $notesAboutMe;

    /**
     * @ORM\OneToMany(targetEntity="View", mappedBy="owner", cascade={"remove"}, orphanRemoval=true)
     */
    private $viewed;

    /**
     * @ORM\OneToMany(targetEntity="View", mappedBy="member", cascade={"remove"}, orphanRemoval=true)
     */
    private $viewedMe;

    /**
     * @ORM\OneToMany(targetEntity="Contact", mappedBy="owner", cascade={"remove"}, orphanRemoval=true)
     */
    private $contacted;

    /**
     * @ORM\OneToMany(targetEntity="Contact", mappedBy="member", cascade={"remove"}, orphanRemoval=true)
     */
    private $contactedMe;

    /**
     * @ORM\OneToMany(targetEntity="Favorite", mappedBy="owner", cascade={"remove"}, orphanRemoval=true)
     */
    private $favorited;

    /**
     * @ORM\OneToMany(targetEntity="Favorite", mappedBy="member", cascade={"remove"}, orphanRemoval=true)
     */
    private $favoritedMe;

    /**
     * @ORM\OneToMany(targetEntity="BlackList", mappedBy="owner", cascade={"remove"}, orphanRemoval=true)
     */
    private $blackListed;

    /**
     * @ORM\OneToMany(targetEntity="BlackList", mappedBy="member", cascade={"remove"}, orphanRemoval=true)
     */
    private $blackListedMe;

    /**
     * @ORM\OneToMany(targetEntity="Communication", mappedBy="owner", cascade={"remove"}, orphanRemoval=true)
     */
    private $connected;

    /**
     * @ORM\OneToMany(targetEntity="Communication", mappedBy="member", cascade={"remove"}, orphanRemoval=true)
     */
    private $connectedMe;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer")
     */
    private $views = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="freeze_reason", type="string", length=255, nullable=true)
     */
    private $freezeReason;

    /**
     * @var string
     *
     * @ORM\Column(name="ban_reason", type="string", length=255, nullable=true)
     */
    private $banReason;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_comments", type="string", length=255, nullable=true)
     */
    private $adminComments;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=25, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;



    /**
     * @var string
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_non_locked", type="boolean")
     */
    private $isNonLocked = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_frozen", type="boolean")
     */
    private $isFrozen = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_flagged", type="boolean")
     */
    private $isFlagged = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_on_homepage", type="boolean")
     */
    private $isOnHomepage = false;

    /**
     * Date/Time of the last activity
     *
     * @var \Datetime
     * @ORM\Column(name="last_activity_at", type="datetime")
     */
    protected $lastActivityAt;

    /**
     * Date/Time of the last real activity
     *
     * @var \Datetime
     * @ORM\Column(name="last_real_activity_at", type="datetime", nullable=true)
     */
    protected $lastRealActivityAt;

    /**
     * Date/Time of the last login
     *
     * @var \Datetime
     * @ORM\Column(name="last_login_at", type="datetime", nullable=true)
     */
    protected $lastloginAt;

    /**
     * Date/Time of the signing up
     *
     * @var \Datetime
     * @ORM\Column(name="sign_up_date", type="datetime")
     */
    protected $signUpDate;

    /**
     * @var \Datetime
     * @ORM\Column(name="start_subscription", type="datetime", nullable=true)
     */
    protected $startSubscription;

    /**
     * @var \Datetime
     * @ORM\Column(name="end_subscription", type="datetime", nullable=true)
     */
    protected $endSubscription;

    /**
     * @var string
     */
    private $oldPassword;

    
    /**
     * @ORM\OneToMany(targetEntity="UserNotifications", mappedBy="user", cascade={"remove"}, orphanRemoval=true)
     * @ORM\OrderBy({"isRead" = "ASC", "date" = "DESC"})
     */
    private $notifications;
    
    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    private $longitude;
    
    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    private $latitude;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sent_push", type="boolean")
     */
    protected $isSentPush = true;
    
    /**
     * @ORM\OneToMany(targetEntity="LikeMe", mappedBy="userFrom", cascade={"remove"}, orphanRemoval=true)
     */
    private $likes;
    
    /**
     * @ORM\OneToMany(targetEntity="LikeMe", mappedBy="userTo", cascade={"remove"}, orphanRemoval=true)
     */
    private $likesMe;

    /**
     * @var string
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    private $facebook;


    /**
     * User constructor.
     */
    public function __construct() {
        $this->purposes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->veggieReasons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->interests = new \Doctrine\Common\Collections\ArrayCollection();
        $this->payments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->likes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->likesMe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->animals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salt = null;
    }
    
    public function hasValidPhotos()
    {
    	foreach($this->photos as $photo){
    		if($photo->getIsValid()){
    			return true;
    		}
    	}
    
    	return false;
    }


    /**
     * Get notifications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotifications()
    {
    	foreach ($this->notifications as $notification){
    		if($notification->getLikeMe()->getIsBingo() and $notification->getNotification()->getId() == 1){
    			$this->removeNotification($notification);
    		}
    	}
    	return $this->notifications;
    }
    
    /**
     * Set isSentEmail
     *
     * @param boolean $isSentEmail
     *
     * @return User
     */
    public function setIsSentEmail($isSentEmail)
    {
    	$this->isSentEmail = $isSentEmail;
    
    	return $this;
    }
    
    /**
     * Get isSentEmail
     *
     * @return boolean
     */
    public function getIsSentEmail()
    {
    	return $this->isSentEmail;
    }
    
    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return User
     */
    public function setLongitude($longitude)
    {
    	$this->longitude = $longitude;
    
    	return $this;
    }
    
    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
    	return $this->longitude;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
    
    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return User
     */
    public function setLatitude($latitude)
    {
    	$this->latitude = $latitude;
    
    	return $this;
    }
    
    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
    	return $this->latitude;
    }

    public function getRoles()
    {
        return array($this->role->getRole());
    }

    public function getRoleSystemName()
    {
        return $this->role->getRole();
    }

    public function isAdmin()
    {
        return $this->role->getRole() == 'ROLE_ADMIN';
    }

    /**
     * Set isSentPush
     *
     * @param boolean $isSentPush
     *
     * @return User
     */
    public function setIsSentPush($isSentPush)
    {
    	$this->isSentPush = $isSentPush;
    
    	return $this;
    }
    
    /**
     * Get isSentPush
     *
     * @return boolean
     */
    public function getIsSentPush()
    {
    	return $this->isSentPush;
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }


    public function __toString()
    {
        return strval($this->id);
    }


    public function isEnabled()
    {
        return $this->isActive;
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function isAccountNonLocked()
    {
        return $this->isNonLocked;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isGranted($role)
    {
        return in_array($role, $this->getRoles());
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function age()
    {
        return date_diff(date_create($this->birthday->format('Y-m-d')), date_create('today'))->y;
    }

    public function isPaying()
    {
        //$format = 'Y-m-d';

        $date = new \DateTime();

        return $this->startSubscription instanceof \DateTime
            && $this->endSubscription instanceof \DateTime
            && $date >= $this->startSubscription
            && $date <= $this->endSubscription;
    }


    public function apiKey()
    {
        return md5($this->id) . md5($this->password);
    }






    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }
    

    /**
     * Set lookingGender
     *
     * @param integer $lookingGender
     * @return User
     */
    public function setLookingGender($lookingGender)
    {
        $this->lookingGender = $lookingGender;

        return $this;
    }

    /**
     * Get lookingGender
     *
     * @return integer 
     */
    public function getLookingGender()
    {
        return $this->lookingGender;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return User
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return integer 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set city
     *
     * @param integer $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return integer 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set relationshipStatus
     *
     * @param integer relationshipStatus
     * @return User
     */
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;

        return $this;
    }

    /**
     * Get relationshipStatus
     *
     * @return integer 
     */
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    /**
     * Set occupation
     *
     * @param integer $occupation
     * @return User
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return integer 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set education
     *
     * @param integer $education
     * @return User
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return integer 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set religion
     *
     * @param integer $religion
     * @return User
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return integer 
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set religionAffinity
     *
     * @param integer $religionAffinity
     * @return User
     */
    public function setReligionAffinity($religionAffinity)
    {
        $this->religionAffinity = $religionAffinity;

        return $this;
    }

    /**
     * Get religionAffinity
     *
     * @return integer
     */
    public function getReligionAffinity()
    {
        return $this->religionAffinity;
    }

    /**
     * Set sexOrientation
     *
     * @param integer $sexOrientation
     * @return User
     */
    public function setSexOrientation($sexOrientation)
    {
        $this->sexOrientation = $sexOrientation;

        return $this;
    }

    /**
     * Get sexOrientation
     *
     * @return integer 
     */
    public function getSexOrientation()
    {
        return $this->sexOrientation;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set looking
     *
     * @param string $looking
     * @return User
     */
    public function setLooking($looking)
    {
        $this->looking = $looking;

        return $this;
    }

    /**
     * Get looking
     *
     * @return string 
     */
    public function getLooking()
    {
        return $this->looking;
    }

    /**
     * Set nutrition
     *
     * @param integer $nutrition
     * @return User
     */
    public function setNutrition($nutrition)
    {
        $this->nutrition = $nutrition;

        return $this;
    }

    /**
     * Get nutrition
     *
     * @return integer 
     */
    public function getNutrition()
    {
        return $this->nutrition;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set smoking
     *
     * @param integer $smoking
     * @return User
     */
    public function setSmoking($smoking)
    {
        $this->smoking = $smoking;

        return $this;
    }

    /**
     * Get smoking
     *
     * @return integer 
     */
    public function getSmoking()
    {
        return $this->smoking;
    }

    /**
     * Set drinking
     *
     * @param integer $drinking
     * @return User
     */
    public function setDrinking($drinking)
    {
        $this->drinking = $drinking;

        return $this;
    }

    /**
     * Get drinking
     *
     * @return integer 
     */
    public function getDrinking()
    {
        return $this->drinking;
    }

    /**
     * Set sport
     *
     * @param integer $sport
     * @return User
     */
    public function setSport($sport)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * Get sport
     *
     * @return integer 
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set green
     *
     * @param integer $green
     * @return User
     */
    public function setGreen($green)
    {
        $this->green = $green;

        return $this;
    }

    /**
     * Get green
     *
     * @return integer 
     */
    public function getGreen()
    {
        return $this->green;
    }

    /**
     * Set children
     *
     * @param integer $children
     * @return User
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Get children
     *
     * @return integer 
     */
    public function getChildren()
    {
        return $this->children;
    }



    /**
     * Set politicalAffiliation
     *
     * @param integer $politicalAffiliation
     * @return User
     */
    public function setPoliticalAffiliation($politicalAffiliation)
    {
        $this->politicalAffiliation = $politicalAffiliation;

        return $this;
    }

    /**
     * Get politicalAffiliation
     *
     * @return integer 
     */
    public function getPoliticalAffiliation()
    {
        return $this->politicalAffiliation;
    }

    /**
     * Set height
     *
     * @param float $height
     * @return User
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set body
     *
     * @param integer $body
     * @return User
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return integer 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set eyes
     *
     * @param integer $eyes
     * @return User
     */
    public function setEyes($eyes)
    {
        $this->eyes = $eyes;

        return $this;
    }

    /**
     * Get eyes
     *
     * @return integer 
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Set hair
     *
     * @param integer $hair
     * @return User
     */
    public function setHair($hair)
    {
        $this->hair = $hair;

        return $this;
    }

    /**
     * Get hair
     *
     * @return integer 
     */
    public function getHair()
    {
        return $this->hair;
    }

    /**
     * Set perfectDate
     *
     * @param string $perfectDate
     * @return User
     */
    public function setPerfectDate($perfectDate)
    {
        $this->perfectDate = $perfectDate;

        return $this;
    }

    /**
     * Get perfectDate
     *
     * @return string 
     */
    public function getPerfectDate()
    {
        return $this->perfectDate;
    }

    /**
     * Set favoriteDish
     *
     * @param string $favoriteDish
     * @return User
     */
    public function setFavoriteDish($favoriteDish)
    {
        $this->favoriteDish = $favoriteDish;

        return $this;
    }

    /**
     * Get favoriteDish
     *
     * @return string 
     */
    public function getFavoriteDish()
    {
        return $this->favoriteDish;
    }

    /**
     * Set favoriteRestaurant
     *
     * @param string $favoriteRestaurant
     * @return User
     */
    public function setFavoriteRestaurant($favoriteRestaurant)
    {
        $this->favoriteRestaurant = $favoriteRestaurant;

        return $this;
    }
    

    /**
     * Get favoriteRestaurant
     *
     * @return string 
     */
    public function getFavoriteRestaurant()
    {
        return $this->favoriteRestaurant;
    }

    /**
     * Set dinnerWith
     *
     * @param string $dinnerWith
     * @return User
     */
    public function setDinnerWith($dinnerWith)
    {
        $this->dinnerWith = $dinnerWith;

        return $this;
    }

    /**
     * Get dinnerWith
     *
     * @return string 
     */
    public function getDinnerWith()
    {
        return $this->dinnerWith;
    }

    /**
     * Set favoriteBooks
     *
     * @param string $favoriteBooks
     * @return User
     */
    public function setFavoriteBooks($favoriteBooks)
    {
        $this->favoriteBooks = $favoriteBooks;

        return $this;
    }

    /**
     * Get favoriteBooks
     *
     * @return string 
     */
    public function getFavoriteBooks()
    {
        return $this->favoriteBooks;
    }

    /**
     * Set music
     *
     * @param string $music
     * @return User
     */
    public function setMusic($music)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * Get music
     *
     * @return string 
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * Add purposes
     *
     * @param \AppBundle\Entity\Purpose $purposes
     * @return User
     */
    public function addPurpose(\AppBundle\Entity\Purpose $purposes)
    {
        $this->purposes[] = $purposes;

        return $this;
    }

    /**
     * Remove purposes
     *
     * @param \AppBundle\Entity\Purpose $purposes
     */
    public function removePurpose(\AppBundle\Entity\Purpose $purposes)
    {
        $this->purposes->removeElement($purposes);
    }

    /**
     * Get purposes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPurposes()
    {
        return $this->purposes;
    }

    /**
     * Add animals
     *
     * @param \AppBundle\Entity\Animal $animals
     * @return User
     */
    public function addAnimal(\AppBundle\Entity\Animal $animals)
    {
        $this->animals[] = $animals;

        return $this;
    }

    /**
     * Remove animals
     *
     * @param \AppBundle\Entity\Animal $animals
     */
    public function removeAnimal(\AppBundle\Entity\Animal $animals)
    {
        $this->animals->removeElement($animals);
    }

    /**
     * Get animals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Add veggieReasons
     *
     * @param \AppBundle\Entity\VeggieReason $veggieReasons
     * @return User
     */
    public function addVeggieReason(\AppBundle\Entity\VeggieReason $veggieReasons)
    {
        $this->veggieReasons[] = $veggieReasons;

        return $this;
    }

    /**
     * Remove veggieReasons
     *
     * @param \AppBundle\Entity\VeggieReason $veggieReasons
     */
    public function removeVeggieReason(\AppBundle\Entity\VeggieReason $veggieReasons)
    {
        $this->veggieReasons->removeElement($veggieReasons);
    }

    /**
     * Get veggieReasons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVeggieReasons()
    {
        return $this->veggieReasons;
    }

    /**
     * Add interests
     *
     * @param \AppBundle\Entity\Interest $interests
     * @return User
     */
    public function addInterest(\AppBundle\Entity\Interest $interests)
    {
        $this->interests[] = $interests;

        return $this;
    }

    /**
     * Remove interests
     *
     * @param \AppBundle\Entity\Interest $interests
     */
    public function removeInterest(\AppBundle\Entity\Interest $interests)
    {
        $this->interests->removeElement($interests);
    }

    /**
     * Get interests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * Add payments
     *
     * @param \AppBundle\Entity\Payment $payments
     * @return User
     */
    public function addPayment(\AppBundle\Entity\Payment $payments)
    {
        $this->payments[] = $payments;

        return $this;
    }

    /**
     * Remove payments
     *
     * @param \AppBundle\Entity\Payment $payments
     */
    public function removePayment(\AppBundle\Entity\Payment $payments)
    {
        $this->payments->removeElement($payments);
    }

    /**
     * Get payments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Add photos
     *
     * @param \AppBundle\Entity\Photo $photos
     * @return User
     */
    public function addPhoto(\AppBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \AppBundle\Entity\Photo $photos
     */
    public function removePhoto(\AppBundle\Entity\Photo $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Get main photo
     *
     * @return \AppBundle\Entity\Photo
     */
    public function getMainPhoto($is_curent_user = false)
    {
        foreach($this->photos as $photo){
        	if(($photo->getIsValid() or $is_curent_user) && $photo->getIsMain()){
                return $photo;
            }
        }

        return null;


        //It's the same just through the query to DB
        /*
        $criteria = Criteria::create()
            ->where(Criteria::expr()->eq("isValid", true))
            ->andWhere(Criteria::expr()->eq("isMain", true))
        ;
        $collection = $this->getPhotos()->matching($criteria);
        return $collection[0];
        */
    }

    /**
     * @param \Datetime $lastActivityAt
     */
    public function setLastActivityAt($lastActivityAt)
    {
        $this->lastActivityAt = $lastActivityAt;
    }

    /**
     * @return \Datetime
     */
    public function getLastActivityAt()
    {
        return $this->lastActivityAt;
    }

    /**
     * @return Bool Whether the user is active or not
     */
    public function isOnline($minutes = 1440)
    {
        // Delay during wich the user will be considered as still active
        $delay = new \DateTime($minutes . ' minutes ago');

        return ( $this->getLastActivityAt() > $delay );
    }

    /**
     * @return Bool Whether the user is new or not
     */
    public function isNew($days = 30)
    {
        // Delay during wich the user will be considered as still new
        $delay = new \DateTime($days .' days ago');

        return ( $this->getSignUpDate() > $delay );
    }

    /**
     * Set isNonLocked
     *
     * @param boolean $isNonLocked
     * @return User
     */
    public function setIsNonLocked($isNonLocked)
    {
        $this->isNonLocked = $isNonLocked;

        return $this;
    }
    
    public function isAddFavorite($userId)
    {
    	$res = false;
    	if($userId == $this->getId()){
    		$res = true;
    	}else {
    		foreach ($this->favorited as $favorite) {
    			if ($favorite->getMember()->getId() == $userId) {
    				$res = true;
    			}
    		}
    	}
    	return $res;
    }
    
    public function isAddBlackListed($userId)
    {
    	$res = false;
    	if($userId == $this->getId()){
    		$res = true;
    	}else {
    		foreach ($this->blackListed as $blackList) {
    			if ($blackList->getMember()->getId() == $userId) {
    				$res = true;
    			}
    		}
    	}
    	return $res;
    }
    
    public function getNoPhoto()
    {
    	return '/images/no_photo_' . $this->gender->getId() . '.jpg';
    }
    
    /**
     * @param User $user
     * @return bool
     */
    public function isAddLike(\AppBundle\Entity\User $user)
    {
    	$userId = $user->getId();
    	$res = false;
    	if($userId == $this->getId() or $this->getMainPhoto() === null or $user->getMainPhoto() === null){
    		$res = true;
    	}else {
    		foreach ($this->likes as $like) {
    			if ($like->getUserTo()->getId() == $userId) {
    				$res = true;
    			}
    		}
    	}
    	return $res;
    }

    /**
     * Get isNonLocked
     *
     * @return boolean 
     */
    public function getIsNonLocked()
    {
        return $this->isNonLocked;
    }

    /**
     * Set signUpDate
     *
     * @param \DateTime $signUpDate
     * @return User
     */
    public function setSignUpDate($signUpDate)
    {
        $this->signUpDate = $signUpDate;

        return $this;
    }

    /**
     * Get signUpDate
     *
     * @return \DateTime 
     */
    public function getSignUpDate()
    {
        return $this->signUpDate;
    }

    /**
     * Get role
     *
     * @return \AppBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add notes
     *
     * @param \AppBundle\Entity\Note $notes
     * @return User
     */
    public function addNote(\AppBundle\Entity\Note $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * Remove notes
     *
     * @param \AppBundle\Entity\Note $notes
     */
    public function removeNote(\AppBundle\Entity\Note $notes)
    {
        $this->notes->removeElement($notes);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add notesAboutMe
     *
     * @param \AppBundle\Entity\Note $notesAboutMe
     * @return User
     */
    public function addNotesAboutMe(\AppBundle\Entity\Note $notesAboutMe)
    {
        $this->notesAboutMe[] = $notesAboutMe;

        return $this;
    }

    /**
     * Remove notesAboutMe
     *
     * @param \AppBundle\Entity\Note $notesAboutMe
     */
    public function removeNotesAboutMe(\AppBundle\Entity\Note $notesAboutMe)
    {
        $this->notesAboutMe->removeElement($notesAboutMe);
    }

    /**
     * Get notesAboutMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotesAboutMe(\AppBundle\Entity\User $owner = null)
    {
        if(null !== $owner){
            $criteria = Criteria::create()->where(Criteria::expr()->eq("owner", $owner));
            $collection = $this->notesAboutMe->matching($criteria);
            return $collection[0];
        }

        return $this->notesAboutMe;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return User
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Add viewed
     *
     * @param \AppBundle\Entity\View $viewed
     * @return User
     */
    public function addViewed(\AppBundle\Entity\View $viewed)
    {
        $this->viewed[] = $viewed;

        return $this;
    }

    /**
     * Remove viewed
     *
     * @param \AppBundle\Entity\View $viewed
     */
    public function removeViewed(\AppBundle\Entity\View $viewed)
    {
        $this->viewed->removeElement($viewed);
    }

    /**
     * Get viewed
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Add viewedMe
     *
     * @param \AppBundle\Entity\View $viewedMe
     * @return User
     */
    public function addViewedMe(\AppBundle\Entity\View $viewedMe)
    {
        $this->viewedMe[] = $viewedMe;

        return $this;
    }

    /**
     * Remove viewedMe
     *
     * @param \AppBundle\Entity\View $viewedMe
     */
    public function removeViewedMe(\AppBundle\Entity\View $viewedMe)
    {
        $this->viewedMe->removeElement($viewedMe);
    }

    /**
     * Get viewedMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getViewedMe()
    {
        return $this->viewedMe;
    }

    /**
     * Add contacted
     *
     * @param \AppBundle\Entity\Contact $contacted
     * @return User
     */
    public function addContacted(\AppBundle\Entity\Contact $contacted)
    {
        $this->contacted[] = $contacted;

        return $this;
    }

    /**
     * Remove contacted
     *
     * @param \AppBundle\Entity\Contact $contacted
     */
    public function removeContacted(\AppBundle\Entity\Contact $contacted)
    {
        $this->contacted->removeElement($contacted);
    }

    /**
     * Get contacted
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacted()
    {
        return $this->contacted;
    }

    /**
     * Add contactedMe
     *
     * @param \AppBundle\Entity\Contact $contactedMe
     * @return User
     */
    public function addContactedMe(\AppBundle\Entity\Contact $contactedMe)
    {
        $this->contactedMe[] = $contactedMe;

        return $this;
    }

    /**
     * Remove contactedMe
     *
     * @param \AppBundle\Entity\Contact $contactedMe
     */
    public function removeContactedMe(\AppBundle\Entity\Contact $contactedMe)
    {
        $this->contactedMe->removeElement($contactedMe);
    }

    /**
     * Get contactedMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContactedMe()
    {
        return $this->contactedMe;
    }

    /**
     * Add favorited
     *
     * @param \AppBundle\Entity\Favorite $favorited
     * @return User
     */
    public function addFavorited(\AppBundle\Entity\Favorite $favorited)
    {
        $this->favorited[] = $favorited;

        return $this;
    }

    /**
     * Remove favorited
     *
     * @param \AppBundle\Entity\Favorite $favorited
     */
    public function removeFavorited(\AppBundle\Entity\Favorite $favorited)
    {
        $this->favorited->removeElement($favorited);
    }

    /**
     * Get favorited
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavorited()
    {
        return $this->favorited;
    }

    /**
     * Add favoritedMe
     *
     * @param \AppBundle\Entity\Favorite $favoritedMe
     * @return User
     */
    public function addFavoritedMe(\AppBundle\Entity\Favorite $favoritedMe)
    {
        $this->favoritedMe[] = $favoritedMe;

        return $this;
    }

    /**
     * Remove favoritedMe
     *
     * @param \AppBundle\Entity\Favorite $favoritedMe
     */
    public function removeFavoritedMe(\AppBundle\Entity\Favorite $favoritedMe)
    {
        $this->favoritedMe->removeElement($favoritedMe);
    }

    /**
     * Get favoritedMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavoritedMe()
    {
        return $this->favoritedMe;
    }

    /**
     * Add blackListed
     *
     * @param \AppBundle\Entity\BlackList $blackListed
     * @return User
     */
    public function addBlackListed(\AppBundle\Entity\BlackList $blackListed)
    {
        $this->blackListed[] = $blackListed;

        return $this;
    }

    /**
     * Remove blackListed
     *
     * @param \AppBundle\Entity\BlackList $blackListed
     */
    public function removeBlackListed(\AppBundle\Entity\BlackList $blackListed)
    {
        $this->blackListed->removeElement($blackListed);
    }

    /**
     * Get blackListed
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlackListed()
    {
        return $this->blackListed;
    }

    /**
     * Add blackListedMe
     *
     * @param \AppBundle\Entity\BlackList $blackListedMe
     * @return User
     */
    public function addBlackListedMe(\AppBundle\Entity\BlackList $blackListedMe)
    {
        $this->blackListedMe[] = $blackListedMe;

        return $this;
    }

    /**
     * Remove blackListedMe
     *
     * @param \AppBundle\Entity\BlackList $blackListedMe
     */
    public function removeBlackListedMe(\AppBundle\Entity\BlackList $blackListedMe)
    {
        $this->blackListedMe->removeElement($blackListedMe);
    }

    /**
     * Get blackListedMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlackListedMe()
    {
        return $this->blackListedMe;
    }

    /**
     * Set isFrozen
     *
     * @param boolean $isFrozen
     * @return User
     */
    public function setIsFrozen($isFrozen)
    {
        $this->isFrozen = $isFrozen;

        return $this;
    }

    /**
     * Get isFrozen
     *
     * @return boolean 
     */
    public function getIsFrozen()
    {
        return $this->isFrozen;
    }

    /**
     * Set freezeReason
     *
     * @param string $freezeReason
     * @return User
     */
    public function setFreezeReason($freezeReason)
    {
        $this->freezeReason = $freezeReason;

        return $this;
    }

    /**
     * Get freezeReason
     *
     * @return string 
     */
    public function getFreezeReason()
    {
        return $this->freezeReason;
    }

    /**
     * Set banReason
     *
     * @param string $banReason
     * @return User
     */
    public function setBanReason($banReason)
    {
        $this->banReason = $banReason;

        return $this;
    }

    /**
     * Get banReason
     *
     * @return string 
     */
    public function getBanReason()
    {
        return $this->banReason;
    }

    /**
     * Set isFlagged
     *
     * @param boolean $isFlagged
     * @return User
     */
    public function setIsFlagged($isFlagged)
    {
        $this->isFlagged = $isFlagged;

        return $this;
    }

    /**
     * Get isFlagged
     *
     * @return boolean 
     */
    public function getIsFlagged()
    {
        return $this->isFlagged;
    }

    /**
     * Set startSubscription
     *
     * @param \DateTime $startSubscription
     * @return User
     */
    public function setStartSubscription($startSubscription)
    {
        $this->startSubscription = $startSubscription;

        return $this;
    }

    /**
     * Get startSubscription
     *
     * @return \DateTime
     */
    public function getStartSubscription()
    {
        return $this->startSubscription;
    }

    /**
     * Set endSubscription
     *
     * @param \DateTime $endSubscription
     * @return User
     */
    public function setEndSubscription($endSubscription)
    {
        $this->endSubscription = $endSubscription;

        return $this;
    }

    /**
     * Get endSubscription
     *
     * @return \DateTime
     */
    public function getEndSubscription()
    {
        return $this->endSubscription;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return User
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set adminComments
     *
     * @param string $adminComments
     * @return User
     */
    public function setAdminComments($adminComments)
    {
        $this->adminComments = $adminComments;

        return $this;
    }

    /**
     * Get adminComments
     *
     * @return string 
     */
    public function getAdminComments()
    {
        return $this->adminComments;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return User
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set loginFrom
     *
     * @param \AppBundle\Entity\LoginFrom $loginFrom
     * @return User
     */
    public function setLoginFrom(\AppBundle\Entity\LoginFrom $loginFrom = null)
    {
        $this->loginFrom = $loginFrom;

        return $this;
    }

    /**
     * Get loginFrom
     *
     * @return \AppBundle\Entity\LoginFrom 
     */
    public function getLoginFrom()
    {
        return $this->loginFrom;
    }

    /**
     * Set zodiac
     *
     * @param string
     * @return User
     */
    public function setZodiac($zodiac = null)
    {
        //$this->zodiac = $zodiac;
        $this->zodiac = $this->getZodiac();

        return $this;
    }

    /**
     * Get zodiac
     *
     * @return string
     */
    public function getZodiac()
    {
        $sign = null;
        if(is_object($this->birthday)){
            
            $zodiac[355] = "גדי";
            $zodiac[325] = "קשת";
            $zodiac[296] = "עקרב";
            $zodiac[265] = "מאזניים";
            $zodiac[234] = "בתולה";
            $zodiac[203] = "אריה";
            $zodiac[172] = "סרטן";
            $zodiac[140] = "תאומים";
            $zodiac[110] = "שור";
            $zodiac[79] = "טלה";
            $zodiac[49] = "דגים";
            $zodiac[21] = "דלי";
            $zodiac[0] = "גדי";

            $dayOfTheYear = (is_object($this->birthday)) ? $this->birthday->format('z') : 0;
            $isLeapYear = (is_object($this->birthday)) ? $this->birthday->format('L') : false;

            if ($isLeapYear && ($dayOfTheYear > 59)) {
                $dayOfTheYear = $dayOfTheYear + 1;
            }
            foreach ($zodiac as $day => $sign) {
                if ($dayOfTheYear >= $day) {
                    break;
                }
            }
        }
        return $sign;
        //return $this->zodiac;
    }

    /**
     * Set isOnHomepage
     *
     * @param boolean $isOnHomepage
     * @return User
     */
    public function setIsOnHomepage($isOnHomepage)
    {
        $this->isOnHomepage = $isOnHomepage;

        return $this;
    }

    /**
     * Get isOnHomepage
     *
     * @return boolean 
     */
    public function getIsOnHomepage()
    {
        return $this->isOnHomepage;
    }

    /**
     * Set lastloginAt
     *
     * @param \DateTime $lastloginAt
     * @return User
     */
    public function setLastloginAt($lastloginAt)
    {
        $this->lastloginAt = $lastloginAt;

        return $this;
    }

    /**
     * Get lastloginAt
     *
     * @return \DateTime 
     */
    public function getLastloginAt()
    {
        return $this->lastloginAt;
    }

    /**
     * Set lastRealActivityAt
     *
     * @param \DateTime $lastRealActivityAt
     * @return User
     */
    public function setLastRealActivityAt($lastRealActivityAt)
    {
        $this->lastRealActivityAt = $lastRealActivityAt;

        return $this;
    }

    /**
     * Get lastRealActivityAt
     *
     * @return \DateTime 
     */
    public function getLastRealActivityAt()
    {
        return $this->lastRealActivityAt;
    }

    /**
     * Add connected
     *
     * @param \AppBundle\Entity\Communication $connected
     * @return User
     */
    public function addConnected(\AppBundle\Entity\Communication $connected)
    {
        $this->connected[] = $connected;

        return $this;
    }

    /**
     * Remove connected
     *
     * @param \AppBundle\Entity\Communication $connected
     */
    public function removeConnected(\AppBundle\Entity\Communication $connected)
    {
        $this->connected->removeElement($connected);
    }

    /**
     * Get connected
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * Add connectedMe
     *
     * @param \AppBundle\Entity\Communication $connectedMe
     * @return User
     */
    public function addConnectedMe(\AppBundle\Entity\Communication $connectedMe)
    {
        $this->connectedMe[] = $connectedMe;

        return $this;
    }

    /**
     * Remove connectedMe
     *
     * @param \AppBundle\Entity\Communication $connectedMe
     */
    public function removeConnectedMe(\AppBundle\Entity\Communication $connectedMe)
    {
        $this->connectedMe->removeElement($connectedMe);
    }

    /**
     * Get connectedMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConnectedMe()
    {
        return $this->connectedMe;
    }

    /**
     * Set oldPassword
     *
     * @param string $oldPassword
     * @return Users
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    /**
     * Get oldPassword
     *
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * Add notifications
     *
     * @param \AppBundle\Entity\UserNotifications $notifications
     * @return User
     */
    public function addNotification(\AppBundle\Entity\UserNotifications $notifications)
    {
        $this->notifications[] = $notifications;

        return $this;
    }

    /**
     * Remove notifications
     *
     * @param \AppBundle\Entity\UserNotifications $notifications
     */
    public function removeNotification(\AppBundle\Entity\UserNotifications $notifications)
    {
        $this->notifications->removeElement($notifications);
    }

    /**
     * Add likes
     *
     * @param \AppBundle\Entity\LikeMe $likes
     * @return User
     */
    public function addLike(\AppBundle\Entity\LikeMe $likes)
    {
        $this->likes[] = $likes;

        return $this;
    }

    /**
     * Remove likes
     *
     * @param \AppBundle\Entity\LikeMe $likes
     */
    public function removeLike(\AppBundle\Entity\LikeMe $likes)
    {
        $this->likes->removeElement($likes);
    }

    /**
     * Get likes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Add likesMe
     *
     * @param \AppBundle\Entity\LikeMe $likesMe
     * @return User
     */
    public function addLikesMe(\AppBundle\Entity\LikeMe $likesMe)
    {
        $this->likesMe[] = $likesMe;

        return $this;
    }

    /**
     * Remove likesMe
     *
     * @param \AppBundle\Entity\LikeMe $likesMe
     */
    public function removeLikesMe(\AppBundle\Entity\LikeMe $likesMe)
    {
        $this->likesMe->removeElement($likesMe);
    }

    /**
     * Get likesMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLikesMe()
    {
        return $this->likesMe;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return User
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
}
