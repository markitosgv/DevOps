<?php

// src/Acme/TaskBundle/Form/Type/TaskType.php
namespace Decathlon\DevOpsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProyectoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', 'text', array(
            'required' => true,
            'label' => 'nombre',
            'data' => $options['attr']['nombre']
        ));

        $builder->add('descripcion', 'text', array(
            'required' => true,
            'label' => 'descripcion'
        ));

        $builder->add('miembros', 'collection', array('type' => new MiembroFormType()));

    }

    public function getName()
    {
       return 'proyecto';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Decathlon\DevOpsBundle\Entity\Proyecto',
        ));
    }
}