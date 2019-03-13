<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Candidat2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jourNaissanceCandidat')
            ->add('moisNaissanceCandidat')
            ->add('anneeNaissanceCandidat')
            ->add('lieuNaissanceCandidat')
            ->add('mailCandidat')
            ->add('fixeCandidat')
            ->add('mobileCandidat')
            ->add('adresseCandidat')
            ->add('cpCandidat')
            ->add('villeCandidat')
            ->add('secuCandidat')
            // A REVOIR ->add('permisCandidat')
            //->add('codeAccesCandidat')
            //->add('etatDossierCandidat')
            //->add('idFormation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}
