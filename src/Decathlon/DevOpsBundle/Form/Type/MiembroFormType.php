<?php

// src/Acme/TaskBundle/Form/Type/TaskType.php
namespace Decathlon\DevOpsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MiembroFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('nombre', 'text', array(
            'required' => true,
            'label' => 'nombre',
        ));

        $builder->add('apellido', 'text', array(
            'required' => true,
            'label' => 'apellido'
        ));

        $builder->add('email', 'text', array(
            'required' => false,
            'label' => 'email'
        ));

        $builder->add('nif', 'text', array(
            'required' => false,
            'label' => 'nif'
        ));

    }

    public function getName()
    {
       return 'miembro';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Decathlon\DevOpsBundle\Entity\Miembro',
        ));
    }
}