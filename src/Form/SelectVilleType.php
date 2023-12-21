<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SelectVilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ville', ChoiceType::class, [
            'choices' => $options['villes'],
            'choice_label' => function ($ville) {
                return $ville; 
            },
            'choice_value' => function ($ville) {
                return $ville;
            },
            'placeholder' => 'Choisir une ville',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'villes' => [],
        ]);
    }
}
