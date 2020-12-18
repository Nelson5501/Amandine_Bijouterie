<?php

namespace App\Form;

use App\Entity\Amandine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Amandine')
            ->add('Admin')
            ->add('Herman0803')
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)

    {
        $resolver->setDefaults([
            'data_class' => Amandine::class,
        ]);
    }
}
