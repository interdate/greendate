<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class SignUpTwoType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('region', 'entity', array(
            'class' => 'AppBundle:Region',
            'label' => '* אזור מגורים',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('city', 'entity', array(
            'class' => 'AppBundle:City',
            'label' => '* עיר',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('relationshipStatus', 'entity', array(
            'class' => 'AppBundle:RelationshipStatus',
            'label' => '* מצב משפחתי',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('occupation', 'entity', array(
            'class' => 'AppBundle:Occupation',
            'label' => '* תחום עיסוק',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('education', 'entity', array(
            'class' => 'AppBundle:Education',
            'label' => '* השכלה',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('religion', 'entity', array(
            'class' => 'AppBundle:Religion',
            'label' => '* דת',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('religionAffinity', 'entity', array(
            'class' => 'AppBundle:ReligionAffinity',
            'label' => '* זיקה לדת',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('sexOrientation', 'entity', array(
            'class' => 'AppBundle:SexOrientation',
            'label' => '* העדפה',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('purposes', 'entity', array(
            'class' => 'AppBundle:Purpose',
            'label' => '* כאן למטרת',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
            'required' => true,
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));


    }


    public function getName()
    {
        return 'signUpTwo';
    }

}