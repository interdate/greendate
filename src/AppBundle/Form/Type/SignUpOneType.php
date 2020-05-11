<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SignUpOneType extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text', array(
            'label' => '* שם משתמש',
        ));

        $builder->add('password', 'password', array(
            'label' => '* סיסמה',
        ));

        $builder->add('password', 'repeated', array(
            'type' => 'password',
            'invalid_message' => 'סיסמאות לא תואמות',
            //'options' => array('attr' => array('class' => 'password-field')),
            'required' => true,
            'first_options'  => array('label' => '* סיסמה'),
            'second_options' => array('label' => '* סיסמה בשנית'),
        ));

        $builder->add('email', 'repeated', array(
            'type' => 'text',
            'invalid_message' => 'כתובות דוא"ל לא תואמות',
            'required' => true,
            'first_options'  => array('label' => '* אימייל'),
            'second_options' => array('label' => '* אימייל בשנית'),
        ));

        $builder->add('gender', 'entity', array(
            'class' => 'AppBundle:Gender',
            'label' => '* אני:',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        /*
        $builder->add('lookingGender', 'entity', array(
            'class' => 'AppBundle:Gender',
            'label' => '* מחפש/ת:',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));
        */

        $builder->add('birthday', 'birthday', array(
            'label' => '* תאריך לידה',
            'years' => range(date('Y') - 18, date('Y') - 120),
            'placeholder' => array('year' => 'שנה', 'month' => 'חודש', 'day' => 'יום'),
            'empty_data'  => null,
        ));

        $builder->add('phone', 'text', array(
            'label' => 'טלפון',
            'required' => false,
        ));

        $builder->add('agree', 'checkbox', array(
            'mapped' => false,
            'attr' => array('id' => 'x1'),
            'value' => 0
        ));
    }

    /*
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('sign_up_one'),
        ));
    }
    */

    public function getName()
    {
        return 'signUpOne';
    }

}