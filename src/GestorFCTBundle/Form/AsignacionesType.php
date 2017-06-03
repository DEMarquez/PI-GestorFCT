<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AsignacionesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha',DateType::class, ['widget' => 'single_text'], array('label'=>'Fecha',
                                                                              'attr' => array('class' => 'form-control')))
            ->add('idProfesor',EntityType::class, array('class' => 'GestorFCTBundle:Profesores',
                                                    'choice_label' => function($nombreProfesor){
                                                      return $nombreProfesor->getNombre();
                                                      }
                                                    ))
            ->add('idEmpresa',EntityType::class, array('class' => 'GestorFCTBundle:Empresas',
                                                    'choice_label' => function($nombreEmpresa){
                                                      return $nombreEmpresa->getNombre();
                                                      }
                                                    ))
            ->add('idAlumno',EntityType::class, array('class' => 'GestorFCTBundle:Alumnos',
                                                    'choice_label' => function($nombreAlumno){
                                                      return $nombreAlumno->getNombre();
                                                      }
                                                    ))
            ->add('guardar',SubmitType::class,array('label'=>'Salvar',
                                                    'attr' => array('class' => 'btn btn-success')))
            ->add('borrar',ResetType::class,array('label'=>'Borrar',
                                                  'attr' => array('class' => 'btn btn-danger')))
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
