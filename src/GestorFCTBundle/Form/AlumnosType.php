<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class AlumnosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class, array('label'=>'Nombre'))
            ->add('direccion',TextType::class, array('label'=>'Direccion'))
            ->add('Telefono',NumberType::class, array('label'=>'Telefono'))
            ->add('dni',TextType::class, array('label'=>'DNI'))
            ->add('residencia',TextType::class, array('label'=>'Residencia'))
            ->add('transporte')
            ->add('guardar',SubmitType::class,array('label'=>'Salvar'))
            ->add('borrar',ResetType::class,array('label'=>'Borrar'))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestorFCTBundle\Entity\Alumnos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestorfctbundle_alumnos';
    }


}
