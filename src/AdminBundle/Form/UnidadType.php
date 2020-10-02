<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UnidadType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control m-xs-b-2')
                ))
                ->add('course', EntityType::class, array(
                    'class' => 'AdminBundle:Course',
                    'choice_label' => 'name',
                    'label' => 'Cursos',
                    'required' => false,
                    'placeholder' => 'Escoge una opción',
                    'empty_data' => null,
                    'attr' => array(
                        'class' => 'form-control m-xs-b-2')
                ))
                ->add('Guardar', SubmitType::class, array(
                    "attr" => array(
                        "class" => "form-submit btn btn-blue-light")
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Unidad'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'adminbundle_unidad';
    }

}
