<?php

namespace App\Form;

use App\Entity\ContratAbonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContratAbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('validationInscription')
            /* ->add('salles')
            ->add('coachs')
            ->add('typeAbonnnements')
            ->add('optionAbonnements')
            ->add('users') */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContratAbonnement::class,
        ]);
    }
}
