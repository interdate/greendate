<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class SignUpThreeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('about', 'textarea', array(
            'label' => '* קצת עלי',
        ));

        $builder->add('looking', 'textarea', array(
            'label' => '* מה אני מחפש/ת',
        ));

        $builder->add('type', 'entity', array(
            'class' => 'AppBundle:Type',
            'label' => '* אני',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('nutrition', 'entity', array(
            'class' => 'AppBundle:Nutrition',
            'label' => 'תזונה',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
            'required' => false,
        ));

        $builder->add('veggieReasons', 'entity', array(
            'class' => 'AppBundle:VeggieReason',
            'label' => '* אני צמחוני/טבעוני כי:',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('smoking', 'entity', array(
            'class' => 'AppBundle:Smoking',
            'label' => '* הרגלי עישון',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('drinking', 'entity', array(
            'class' => 'AppBundle:Drinking',
            'label' => '* הרגלי שתיה',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('sport', 'entity', array(
            'class' => 'AppBundle:Sport',
            'label' => '* הרגלי ספורט',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('green', 'entity', array(
            'class' => 'AppBundle:Green',
            'label' => '* כמה ירוק אני',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('children', 'entity', array(
            'class' => 'AppBundle:Children',
            'label' => '* ילדים',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('animals', 'entity', array(
            'class' => 'AppBundle:Animals',
            'label' => '* בעלי חיים',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('interests', 'entity', array(
            'class' => 'AppBundle:Interest',
            'label' => '* תחומי עניין:',
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
        ));

        $builder->add('politicalAffiliation', 'entity', array(
            'class' => 'AppBundle:PoliticalAffiliation',
            'label' => '* השקפה פוליטית',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));


        $i = 0;
        $height = 1.2;
        $choices = array();

        while( (float) $height <= 2.2){
            $choices[(string) $height] = (string) $height;
            $height = (float) $height + 0.01;
            $i++;
        }

        $builder->add('height', 'choice', array(
            'label' => '* גובה',
            'choices' => $choices,
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));


        $builder->add('body', 'entity', array(
            'class' => 'AppBundle:Body',
            'label' => '* מבנה גוף',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('eyes', 'entity', array(
            'class' => 'AppBundle:Eyes',
            'label' => '* צבע עיניים',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('hair', 'entity', array(
            'class' => 'AppBundle:Hair',
            'label' => '* צבע שיער',
            'choice_label' => 'name',
            'placeholder' => 'בחרו',
            'empty_data'  => null,
        ));

        $builder->add('perfectDate', 'textarea', array(
            'label' => 'הדייט המושלם עבורי הוא...',
            'required' => false,
        ));

        $builder->add('favoriteDish', 'textarea', array(
            'label' => 'מנה צמחונית אהובה...',
            'required' => false,
        ));

        $builder->add('favoriteRestaurant', 'textarea', array(
            'label' => 'מסעדה ידידותית לצמחונים שאני אוהב/ת...',
            'required' => false,
        ));

        $builder->add('dinnerWith', 'textarea', array(
            'label' => 'איזה אישיות הייתי מזמין לארוחת ערב?',
            'required' => false,
        ));

        $builder->add('favoriteBooks', 'textarea', array(
            'label' => 'הספרים האהובים עליי...',
            'required' => false,
        ));

        $builder->add('music', 'textarea', array(
            'label' => 'המוזיקה שאני שומע...',
            'required' => false,
        ));



    }


    public function getName()
    {
        return 'signUpTwo';
    }

}