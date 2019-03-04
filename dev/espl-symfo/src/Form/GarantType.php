<?php

namespace App\Form;

use App\Entity\Garant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GarantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomGarant')
            ->add('prenomGarant')
            ->add('mailGarant')
            ->add('telGarant')
            ->add('lienParente')
            ->add('adresseGarant')
            ->add('cpGarant')
            ->add('villeGarant')
            ->add('professionGarant')
            ->add('entrepriseGarant')
            ->add('idCandidat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Garant::class,
        ]);
    }
}
