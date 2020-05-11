<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileSettingsType extends AbstractType
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
    }

    public function getName()
    {
        return 'profileSettings';
    }

}