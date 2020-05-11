<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ChangePasswordType extends AbstractType
{
    public $disableToken = true;

    public function disableToken  ()
    {
        $this->disableToken = false;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('oldPassword', 'password', array('label' => '* סיסמה ישנה'));
        $builder->add('password', 'repeated', array(
            'type' => 'password',
            'invalid_message' => 'סיסמאות לא תואמות',
            'required' => true,
            'first_options'  => array('label' => '* סיסמה חדשה'),
            'second_options' => array('label' => '* סיסמה חדשה בשנית'),
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('change_password'),
            'csrf_protection' => $this->disableToken
        ));
    }

    public function getName()
    {
        return 'changePassword';
    }

}