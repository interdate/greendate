<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class QuickSearchSidebarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = array();
        for($i = 18; $i <= 120; $i++){
            $choices[(string) $i] = $i;
        }

        $builder->add('ageFrom', 'choice', array(
            'label' => 'גיל',
            'choices' => $choices,
            'placeholder' => 'בחרו',
            'empty_data'  => null,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('ageTo', 'choice', array(
            'label' => 'עד',
            'choices' => $choices,
            'placeholder' => 'בחרו',
            'empty_data'  => null,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('region', 'entity', array(
            'class' => 'AppBundle:Region',
            'label' => 'איזור',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('type', 'entity', array(
            'class' => 'AppBundle:Type',
            'label' => 'העדפה',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('username', 'text', array(
            'label' => 'כינוי',
            'attr' => array('class' => 'txtbox'),
            'required' => false,
        ));

        $builder->add('filter', 'hidden', array(
            'data' => 'lastActivity',
            'mapped' => false,
        ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(

        ));
    }

    public function getName()
    {
        return 'quickSearchSidebar';
    }

}