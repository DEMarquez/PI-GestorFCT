<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class GrupoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class,array('label'=>'Nombre',
                                                'attr' => array('class' => 'form-control')))
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
            'data_class' => 'GestorFCTBundle\Entity\Grupo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestorfctbundle_grupo';
    }


}
