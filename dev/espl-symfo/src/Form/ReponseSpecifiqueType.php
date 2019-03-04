<?php

namespace App\Form;

use App\Entity\ReponseSpecifique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseSpecifiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dossierReflexion')
            ->add('connaissanceEcole')
            ->add('participationJpo')
            ->add('questionsPrealables')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReponseSpecifique::class,
        ]);
    }
}
