<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SlideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'label' => 'כותרת',
        ));

        $builder->add('headerType', 'choice', array(
            'label' => 'סוג הכותרת',
            'choices'  => array(
                'h1' => 'h1',
                'h2' => 'h2',
                'h3' => 'h3',
                'h4' => 'h4',
                'h5' => 'h5',
            ),
            'choices_as_values' => true,
        ));

        $builder->add('content', 'textarea', array(
            'label' => 'טקסט',
        ));

        $builder->add('imageName', 'hidden', array(
            'label' => 'תמונה',
            'required' => false,
        ));

        $builder->add('isActive', 'checkbox', array(
            'label' => 'פעיל',
            'required' => false,
        ));


    }
    public function getName()
    {
        return 'slide';
    }

}