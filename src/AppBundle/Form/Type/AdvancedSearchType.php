<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

class AdvancedSearchType extends QuickSearchSidebarType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->remove('username');

        $builder->add('region', 'entity', array(
            'class' => 'AppBundle:Region',
            'label' => 'איזור בארץ',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $i = 0;
        $height = 1.2;
        $choices = array();

        while( (float) $height <= 2.2){
            $choices[(string) $height] = (string) $height;
            $height = (float) $height + 0.01;
            $i++;
        }

        $builder->add('heightFrom', 'choice', array(
            'choices' => $choices,
            'placeholder' => 'בחרו',
            'empty_data'  => null,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('heightTo', 'choice', array(
            'choices' => $choices,
            'placeholder' => 'בחרו',
            'empty_data'  => null,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('body', 'entity', array(
            'class' => 'AppBundle:Body',
            'label' => 'מבנה גוף',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('relationshipStatus', 'entity', array(
            'class' => 'AppBundle:RelationshipStatus',
            'label' => 'מצב משפחתי',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('type', 'entity', array(
            'class' => 'AppBundle:Type',
            'label' => 'אורח חיים',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('occupation', 'entity', array(
            'class' => 'AppBundle:Occupation',
            'label' => 'תחום עיסוק',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('education', 'entity', array(
            'class' => 'AppBundle:Education',
            'label' => 'השכלה',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('religion', 'entity', array(
            'class' => 'AppBundle:Religion',
            'label' => 'דת',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('religionAffinity', 'entity', array(
            'class' => 'AppBundle:ReligionAffinity',
            'label' => 'זיקה לדת',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('sexOrientation', 'entity', array(
            'class' => 'AppBundle:SexOrientation',
            'label' => 'העדפה מינית',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('purposes', 'entity', array(
            'class' => 'AppBundle:Purpose',
            'label' => 'כאן למטרת',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('smoking', 'entity', array(
            'class' => 'AppBundle:Smoking',
            'label' => 'הרגלי עישון',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('drinking', 'entity', array(
            'class' => 'AppBundle:Drinking',
            'label' => 'הרגלי שתיה',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('children', 'entity', array(
            'class' => 'AppBundle:Children',
            'label' => 'ילדים',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('withPhoto', 'checkbox', array(
            'label' => 'בעלי תמונת פרופיל',
            'mapped' => false,
            'required' => false,
        ));

    }

    public function getName()
    {
        return 'advancedSearch';
    }

}