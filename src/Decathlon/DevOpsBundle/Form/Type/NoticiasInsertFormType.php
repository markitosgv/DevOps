<?php

// src/Acme/TaskBundle/Form/Type/TaskType.php
namespace Decathlon\DevOpsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NoticiasInsertFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titular', 'text', array(
            'required' => true,
            'label' => 'titular',
            'data' => $options['attr']['titular']
        ));

        $builder->add('fecha', 'date', array(
            'required' => true,
            'label' => 'titular',
            'data' => new \DateTime(),
        ));

        $builder->add('cuerpo', 'text', array(
            'required' => true,
            'label' => 'cuerpo'
        ));

        $builder->add('categoria', 'entity', array(
            'required' => true,
            'label' => 'categoria',
            'class' => 'Decathlon\DevOpsBundle\Entity\Categorias',
            'property' => 'nombre'
        ));

        $builder->add('save', 'submit');

    }

    public function getName()
    {
       return 'noticias';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Decathlon\DevOpsBundle\Entity\Noticias',
            'validation_groups' => array('insert'),
        ));
    }
}