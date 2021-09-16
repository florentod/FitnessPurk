<?php

namespace App\Form;

use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomSalle')
            ->add('adresse')
            ->add('cp')
            ->add('ville')
            ->add('tel')
            ->add('email')
            ->add('horaires')
            /* ->add('concepts')
            ->add('activites')
            ->add('articleWebs')
            ->add('coachs') */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Salle::class,
        ]);
    }
}
