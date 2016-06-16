<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VoyageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pays')
            ->add('ville')
            ->add('adrDepart')
            ->add('adrArriver')
            ->add('dateDepart', 'datetime')
            ->add('tempsSejour')
            ->add('prixFood')
            ->add('prixLoge')
            ->add('locomotion', ChoiceType::class, array(
                'choices' => array(
                    'voiture' => 'Voiture',
                    'avion' => 'Avion',
                    'velo' => 'Vélo'
                ),
                'required'    => false,
                'placeholder' => 'Choose your locomotion',
                'empty_data'  => null
            ))
            ->add('commentaire')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Voyage'
        ));
    }
}
