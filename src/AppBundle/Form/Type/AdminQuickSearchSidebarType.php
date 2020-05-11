<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AdminQuickSearchSidebarType extends QuickSearchSidebarType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('id', 'text', array(
            'label' => 'מספר משתמש',
            'attr' => array('placeholder' =>  'מספר משתמש'),
            'required' => false,
        ));

        $builder->add('email', 'text', array(
            'label' => 'דוא״ל',
            'attr' => array('placeholder' =>  'דוא״ל'),
            'required' => false,
        ));

        $builder->add('username', 'text', array(
            'label' => 'כינוי',
            'attr' => array('placeholder' => 'כינוי'),
            'required' => false,
        ));

    }
}