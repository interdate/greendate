<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class QuickSearchHomePageType extends QuickSearchSidebarType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);

        //Overriding
        $builder->remove('type');
        $builder->remove('username');
        $builder->add('region', 'entity', array(
            'class' => 'AppBundle:Region',
            'label' => 'איזור',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
            'required' => false,
        ));

        //New Items

        $builder->add('gender', 'entity', array(
            'class' => 'AppBundle:Gender',
            'label' => '* מחפש/ת:',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));


        /*$builder->add('lookingGender', 'entity', array(
            'class' => 'AppBundle:Gender',
            'label' => '* מחפש/ת:',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));*/
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(

        ));
    }

    public function getName()
    {
        return 'quickSearchHomePage';
    }

}