<?php

namespace App\Form;

use App\Entity\Metro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('geoPoint')
            ->add('geoShape')
            ->add('objetId')
            ->add('idRefZdl')
            ->add('gareId')
            ->add('nomGare')
            ->add('nomLong')
            ->add('nomIv')
            ->add('nomMod')
            ->add('mode')
            ->add('fer')
            ->add('train')
            ->add('rer')
            ->add('metro')
            ->add('tramway')
            ->add('navette')
            ->add('val')
            ->add('terfer')
            ->add('tertrain')
            ->add('terrer')
            ->add('termetro')
            ->add('tertram')
            ->add('ternavette')
            ->add('terval')
            ->add('idrefliga')
            ->add('idrefligc')
            ->add('ligne')
            ->add('codeLignf')
            ->add('ligneCode')
            ->add('indiceLig')
            ->add('reseau')
            ->add('resCom')
            ->add('codResf')
            ->add('resStif')
            ->add('exploitant')
            ->add('numPsr')
            ->add('idf')
            ->add('principal')
            ->add('x')
            ->add('y')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Metro::class,
        ]);
    }
}
