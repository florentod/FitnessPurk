<?php

namespace App\Form;

use App\Entity\TypeAbonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypeAbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAbonnement')
            ->add('prixPremMois')
            ->add('prix')
            ->add('fraisInscription')
            ->add('engagemennt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TypeAbonnement::class,
        ]);
    }
}
