<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EmpresasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class, array('label'=>'Nombre',
                                                  'attr' => array('class' => 'form-control')))
            ->add('poblacion',TextType::class,array('label'=>'Poblacion',
                                                  'attr' => array('class' => 'form-control')))
            ->add('aportadaAlumno',ChoiceType::class, array('label'=>'Aportada por Alumno',
                                                      'attr' => array('class' => 'form-control'),
                                                      'choices' => [
                                                      'Si' => true,
                                                      'No' => false]))
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
            'data_class' => 'GestorFCTBundle\Entity\Empresas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestorfctbundle_empresas';
    }


}
