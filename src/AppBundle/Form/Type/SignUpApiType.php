<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SignUpApiType extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

                $builder->add('username', 'text', array(
                    'label' => '* שם משתמש',
                ));

                $builder->add('password', 'password', array(
                    'label' => '* סיסמה',
                ));

                $builder->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'סיסמאות לא תואמות',
                    //'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => '* סיסמה'),
                    'second_options' => array('label' => '* סיסמה בשנית'),
                ));

                $builder->add('email', 'repeated', array(
                    'type' => 'text',
                    'invalid_message' => 'כתובות דוא"ל לא תואמות',
                    'required' => true,
                    'first_options' => array('label' => '* אימייל'),
                    'second_options' => array('label' => '* אימייל בשנית'),
                ));

                $builder->add('gender', 'entity', array(
                    'class' => 'AppBundle:Gender',
                    'label' => '* אני:',
                    'choice_label' => 'name',
                    'placeholder' => 'בחרו',
                    'empty_data' => null,
                ));

                $builder->add('birthday', 'birthday', array(
                    'label' => '* תאריך לידה',
                    'years' => range(date('Y') - 18, date('Y') - 120),
                    'placeholder' => array('year' => 'שנה', 'month' => 'חודש', 'day' => 'יום'),
                    'empty_data' => null,
                ));

                $builder->add('phone', 'text', array(
                    'label' => 'טלפון',
                    'required' => false,
                ));

                $builder->add('agree', 'checkbox', array(
                    'mapped' => false,
                    'attr' => array('id' => 'x1'),
                    'value' => 0,
                ));


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
        return 'user';
    }

}