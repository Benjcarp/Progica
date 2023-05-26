<?php

namespace App\Form;

use App\Entity\Departement;
use App\Entity\EquipementExterieur;
use App\Entity\EquipementInterieur;
use App\Entity\Region;
use App\Entity\Ville;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiltreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('villes', EntityType::class, [
                'class' => Ville::class,
                'required' => false
                ])
            ->add('departements', EntityType::class, [
                'class' => Departement::class,
                'required' => false
                ])
            ->add('regions', EntityType::class, [
                'class' => Region::class,
                'required' => false
            ])
            ->add('equipementExterieurs', EntityType::class, [
                'class' => EquipementExterieur::class,
                'expanded' => true,
                'multiple' => true,
                'required' => false
            ])
            ->add('equipementInterieurs', EntityType::class, [
                'class' => EquipementInterieur::class,
                'expanded' => true,
                'multiple' => true,
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'GET'
        ]);
    }
}
