<?php

namespace App\Form;

use App\Entity\Habitant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Habitation;


class HabitantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomFamille')
            ->add('prenomIndividu')
            ->add('dateDeNaissance', DateType::class, [
                'years' => range(date('Y') - 120, date('Y')),
                'months' => range(1, 12),
                'days' => range(1, 31),
                'format' => 'dd MM yyyy',
            ])
            ->add('genreIdentifie')
            ->add('habitation', EntityType::class, [
                'class' => Habitation::class,
                'choice_label' => 'adresse', // ou autre propriété d'Habitation
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Habitant::class,
        ]);
    }
}
