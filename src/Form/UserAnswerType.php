<?php

namespace App\Form;

use App\Entity\UserAnswer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserAnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('carbone_score', null, [
                'label' => false,
                'required' => true
            ])
            ->add('spot')
            ->add('date_start')
            ->add('duration')
            ->add('cleanliness')
            ->add('general')
            ->add('transport')
            ->add('solarcream')
            ->add('cigarette')
            ->add('plasticbag')
            ->add('wave')
            ->add('bathers')
            ->add('nautic_activity')
            ->add('boats')
            ->add('surfers')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserAnswer::class,
        ]);
    }
}
