<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SeoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', array(
            'label' => 'Title',
        ));

        $builder->add('description', 'textarea', array(
            'label' => 'Meta Description',
            'required' => false,
        ));

        $builder->add('page', 'text', array(
            'label' => 'עמוד',
        ));
    }
    public function getName()
    {
        return 'seo';
    }

}