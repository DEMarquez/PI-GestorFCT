<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class EmpresasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class, array('label'=>'Nombre'))
            ->add('poblacion',TextType::class,array('label'=>'Poblacion'))
            ->add('aportadaAlumno')
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
