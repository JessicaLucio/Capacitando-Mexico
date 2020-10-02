<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TopicType extends AbstractType {

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
                ->add('body', CKEditorType::class, array(
                    'config' => array(
                        'language' => 'es',
                        'uiColor' => '#ffffff',
                    //...
                    ),
                ))
                ->add('course', EntityType::class, array(
                    'class' => 'AdminBundle:Course',
                    'choice_label' => 'name',
                    'label' => 'Cursos',
                    'attr' => array(
                        'class' => 'form-control m-xs-b-2')
                ))
                ->add('unidad', EntityType::class, array(
                    'class' => 'AdminBundle:Unidad',
                    'choice_label' => 'name',
                    'label' => 'Unidades',
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
            'data_class' => 'AdminBundle\Entity\Topic'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'adminbundle_topic';
    }

}
