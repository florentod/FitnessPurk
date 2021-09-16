<?php

namespace App\Form;

use App\Entity\OptionAbonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OptionAbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomOption')
            ->add('tarif')
            ->add('typeAcces')
            ->add('description')
           /*  ->add('contratAbonnements') */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OptionAbonnement::class,
        ]);
    }
}
