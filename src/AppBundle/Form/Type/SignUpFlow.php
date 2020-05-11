<?php

namespace AppBundle\Form\Type;

use Craue\FormFlowBundle\Form\FormFlow;
use Craue\FormFlowBundle\Form\FormFlowInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class SignUpFlow extends FormFlow
{
    public $disableToken = true;

    protected function loadStepsConfig()
    {
        return array(
            array(
                'label' => 'יצירת חשבון בגרינדייט',
            	'form_type' => new SignUpOneType(),
               // 'form_type' => new SignUpOneType(),
                'form_options' => array(
                    'validation_groups' => array('sign_up_one'),
                     'csrf_protection' => $this->disableToken,
                ),
            ),
            array(
                'label' => 'יצירת פרופיל',
                'form_type' => new SignUpTwoType(),
            	'form_options' => array(
                    'validation_groups' => array('sign_up_two'),
                   'csrf_protection' => $this->disableToken,
                ),
            ),
            array(
                'label' => 'יצירת פרופיל',
                'form_type' => new SignUpThreeType(),
                'form_options' => array(
                    'validation_groups' => array('sign_up_three'),
                    'csrf_protection' => $this->disableToken,
                ),
            ),
            /*
            array(
                'label' => 'הוספת תמונה',
                'form_type' => new SignUpFourType(),
            ),
            array(
                'label' => 'הוספת תמונה',
                'form_type' => new SignUpFiveType(),
            ),
            */
        );
    }

   /* public function getFormOptions($step, array $options = array()) {
    	$options = parent::getFormOptions($step, $options);
    	if ($step === 2 and is_object($this->getFormData()->getGender())) {
    		$options['is_male'] = $this->getFormData()->getGender()->getId() == 1 ? true : false;
    	}
    	return $options;
    }
    */
    
    public function getName()
    {
        return 'signUp';
    }


    public function disableToken()
    {
        $this->disableToken = false;
    }
}