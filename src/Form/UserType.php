<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            /* ->add('roles') */
            ->add('password')
            ->add('prenom')
            ->add('nom')
            ->add('telephone')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('dateInscription')
            ->add('civilite')
            ->add('dateNaissance')
            /* ->add('optinPartenaire') */
            ->add('photo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
