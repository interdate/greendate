<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FaqCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'label' => 'שם',
        ));

        $builder->add('isActive', 'checkbox', array(
            'label' => 'פעיל',
            'required' => false,
        ));
    }
    public function getName()
    {
        return 'faqCategory';
    }

}