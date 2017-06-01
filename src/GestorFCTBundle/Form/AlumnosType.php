<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AlumnosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class, array('label'=>'Nombre',
                                                  'attr' => array('class' => 'form-control')))
            ->add('direccion',TextType::class, array('label'=>'Direccion',
                                                      'attr' => array('class' => 'form-control')))
            ->add('Telefono',NumberType::class, array('label'=>'Telefono',
                                                      'attr' => array('class' => 'form-control')))
            ->add('dni',TextType::class, array('label'=>'DNI',
                                                'attr' => array('class' => 'form-control')))
            ->add('residencia',TextType::class, array('label'=>'Residencia',
                                                      'attr' => array('class' => 'form-control')))
            ->add('transporte',ChoiceType::class, ['choices' => [
                                                    'Si' => true,
                                                    'No' => false]],
                                                    array('label'=>'Trasporte',
                                                          'attr' => array('class' => 'form-control')))
            ->add('grupo',ChoiceType::class, array('label'=>'Curso',
                                                          'attr' => array('class' => 'form-check-input')))
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
