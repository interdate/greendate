<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

class AdminAdvancedSearchType extends AdvancedSearchType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        //gender
        $builder->add('gender', 'entity', array(
        		'class' => 'AppBundle:Gender',
        		'label' => 'מין',
        		'choice_label' => 'name',
        		'multiple' => true,
        		'expanded' => true,
        ));

        $builder->add('veggieReasons', 'entity', array(
            'class' => 'AppBundle:VeggieReason',
            'label' => 'אני צמחוני /טבעוני כי',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('interests', 'entity', array(
            'class' => 'AppBundle:Interest',
            'label' => 'תחומי עניין',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('zodiac', 'entity', array(
            'class' => 'AppBundle:Zodiac',
            'label' => 'מזל',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('loginFrom', 'entity', array(
            'class' => 'AppBundle:LoginFrom',
            'label' => 'מאיפה ביצע לוג אין בפעם האחרונה',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));


        /*Boolean Props*/

        $builder->add('isActive', 'choice', array(
            'label' => 'פעילים',
            'choices'  => array(
                'בחרו' => null,
                'כן' => true,
                'לא' => false,
            ),
            'choices_as_values' => true,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('isFrozen', 'choice', array(
            'label' => 'מוקפאים',
            'choices'  => array(
                'בחרו' => null,
                'כן' => true,
                'לא' => false,
            ),
            'choices_as_values' => true,
            'mapped' => false,
            'required' => false,
        ));


        $builder->add('isPhoto', 'choice', array(
            'label' => 'בעלי תמונות',
            'choices'  => array(
                'בחרו' => null,
                'כן' => true,
                'לא' => false,
            ),
            'choices_as_values' => true,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('isPaying', 'choice', array(
            'label' => 'בעלי מנוי',
            'choices'  => array(
                'בחרו' => null,
                'כן' => true,
                'לא' => false,
            ),
            'choices_as_values' => true,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('hasPoints', 'choice', array(
            'label' => 'בעלי נקודות',
            'choices'  => array(
                'בחרו' => null,
                'כן' => true,
                'לא' => false,
            ),
            'choices_as_values' => true,
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('isPhone', 'choice', array(
            'label' => "בעלי מס' טלפון",
            'choices'  => array(
                'בחרו' => null,
                'כן' => true,
                'לא' => false,
            ),
            'choices_as_values' => true,
            'mapped' => false,
            'required' => false,
        ));

        /* Date Props */

        $builder->add('startSubscriptionFrom', 'text', array(
            'label' => 'תאריך תחילת מנוי',
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('startSubscriptionTo', 'text', array(
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('endSubscriptionFrom', 'text', array(
            'label' => 'תאריך סיום מנוי',
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('endSubscriptionTo', 'text', array(
            'mapped' => false,
            'required' => false,
        ));


        $builder->add('signUpFrom', 'text', array(
            'label' => 'תאריך הרשמה',
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('signUpTo', 'text', array(
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('lastVisitedFrom', 'text', array(
            'label' => 'תאריך ביקור אחרון',
            'mapped' => false,
            'required' => false,
        ));

        $builder->add('lastVisitedTo', 'text', array(
            'mapped' => false,
            'required' => false,
        ));


        /* Other */

        $builder->add('ip', 'text', array(
            'label' => 'IP',
            'required' => false,
        ));





    }
}