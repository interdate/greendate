<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ContactType extends AbstractType
{
    public $disableToken = true;

    public function disableToken  ()
    {
        $this->disableToken = false;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => $this->disableToken,
        ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'text', array(
            'label' => '* אימייל',
        ));

        $builder->add('subject', 'text', array(
            'label' => '* נושא הפניה',
            'mapped' => false,
        ));

        $builder->add('text', 'textarea', array(
            'label' => '* הודעה',
            'mapped' => false,
        ));
    }

    public function getName()
    {
        return 'contact';
    }

}