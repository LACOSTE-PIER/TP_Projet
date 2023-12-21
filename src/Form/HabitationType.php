<?php

namespace App\Form;

use App\Entity\Habitation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HabitationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse')
            ->add('TypeHabitation')
            ->add('SurfaceHabitable')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Habitation::class,
        ]);
    }

    #[Route('/habitation/{id}/habitants', name: 'app_habitation_view_habitants')]
    public function viewHabitants(Habitation $habitation): Response
    {
        
        $habitants = $habitation->getHabitants();

        return $this->render('habitation/view_habitants.html.twig', [
            'habitation' => $habitation,
            'habitants' => $habitants,
        ]);
    }
}
