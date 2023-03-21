<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * La classe du formulaire
 */
class DeleteBook extends AbstractType
{

    /**
     * Fonction pour créer le formulaire.
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add(
            'delete',
            SubmitType::class,
            array(
                'label' => 'Delete the Book'
            )
        );
    }
}
