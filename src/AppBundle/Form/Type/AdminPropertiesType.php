<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AdminPropertiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder->add('isSentEmail', 'checkbox', array(
    			'label' => 'התראה על הודעה למייל',
    			'required' => false,
    	));
    	
    	$builder->add('isSentPush', 'checkbox', array(
    			'label' => 'התראה על הודעה לטלפון (Push)',
    			'required' => false,
    	));
    	
    	$builder->add('isOnHomepage', 'checkbox', array(
            'label' => 'המשתמש מופיע בעמוד הכניסה',
            'required' => false,
        ));

        $builder->add('adminComments', 'textarea', array(
            'label' => 'הערות',
            'required' => false,
        ));

        $builder->add('banReason', 'textarea', array(
            'label' => 'סיבת החסימה',
            'required' => false,
        ));

        $builder->add('freezeReason', 'textarea', array(
            'label' => 'סיבת ההקפאה',
            'required' => false,
        ));
    }

    public function getName()
    {
        return 'adminProperties';
    }

}