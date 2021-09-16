<?php

namespace App\Form;

use App\Entity\Coach;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoachType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCoach')
            ->add('prenomCoach')
            ->add('clubCoach')
            ->add('photoCoach')
            ->add('telCoach')
            ->add('discipline')
            /* ->add('salles')
            ->add('contratAbonnements') */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coach::class,
        ]);
    }
}
