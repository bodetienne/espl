<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCandidat')
            ->add('prenomCandidat')
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
            ->add('permisCandidat')
            ->add('codeAccesCandidat')
            ->add('etatDossierCandidat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}
