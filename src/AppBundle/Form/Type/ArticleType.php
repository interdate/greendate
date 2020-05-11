<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ArticleType extends AbstractType
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


        $builder->add('brief', 'textarea', array(
            'label' => 'תקציר',
        ));

        $builder->add('content', 'textarea', array(
            'label' => 'תוכן',
            'required' => false,
        ));

        $builder->add('imageName', 'hidden', array(
            'label' => 'תמונה',
            'required' => false,
        ));

        $builder->add('imageAlt', 'text', array(
            'label' => 'Alt',
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

        $builder->add('isOnHomepage', 'checkbox', array(
            'label' => 'מופיע בעמוד הכניסה',
            'required' => false,
        ));

        $builder->add('isActive', 'checkbox', array(
            'label' => 'פעיל',
            'required' => false,
        ));


    }
    public function getName()
    {
        return 'article';
    }

}