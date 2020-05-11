<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FaqType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'label' => 'שאלה',
        ));

        $builder->add('content', 'textarea', array(
            'label' => 'תשובה',
        ));

        $builder->add('category', 'entity', array(
            'class' => 'AppBundle:FaqCategory',
            'label' => 'קטגוריה',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('isActive', 'checkbox', array(
            'label' => 'פעיל',
            'required' => false,
        ));

    }
    public function getName()
    {
        return 'faq';
    }

}