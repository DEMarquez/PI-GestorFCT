<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class AsignacionesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha',DateType::class, array('label'=>'Nombre'))
            ->add('idProfesor')
            ->add('idEmpresa')
            ->add('idAlumno')
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
            'data_class' => 'GestorFCTBundle\Entity\Asignaciones'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestorfctbundle_asignaciones';
    }


}
