<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'label' => 'כותרת',
        ));

        $builder->add('headerType', 'choice', array(
            'label' => 'סוג הכותרת',
            'choices'  => array(
                'H1' => 'h1',
                'H2' => 'h2',
            ),
            'choices_as_values' => true,
        ));

        $builder->add('content', 'textarea', array(
            'label' => 'תוכן',
            'required' => false,
        ));



        $builder->add('uri', 'text', array(
            'label' => 'URI',
            'required' => false,
        ));

        $builder->add('title', 'text', array(
            'label' => 'Title',
        ));

        $builder->add('description', 'textarea', array(
            'label' => 'Meta Description',
            'required' => false,
        ));

        $builder->add('isActive', 'checkbox', array(
            'label' => 'פעיל',
            'required' => false,
        ));

        $builder->add('footerHeader', 'entity', array(
            'class' => 'AppBundle:FooterHeader',
            'label' => 'מופיע בפוטר תחת כותרת',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'multiple' => false,
            'expanded' => false,
            'required' => false,
        ));


    }
    public function getName()
    {
        return 'page';
    }

}