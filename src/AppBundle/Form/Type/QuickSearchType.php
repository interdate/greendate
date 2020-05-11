<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class QuickSearchType extends QuickSearchSidebarType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('username', 'text', array(
            'label' => 'חיפוש לפי כינוי',
            'required' => false,
        ));

    }

    public function getName()
    {
        return 'quickSearch';
    }

}