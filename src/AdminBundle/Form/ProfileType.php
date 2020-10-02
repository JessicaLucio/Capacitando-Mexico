<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProfileType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control m-xs-b-3')
                ))
                ->add('surname', TextType::class, array(
                    'label' => 'Apellidos',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control m-xs-b-3')
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'Correo Electronico',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control m-xs-b-3')
                ))
                ->add('nickname', TextType::class, array(
                    'label' => 'Nombre de usuario',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control m-xs-b-3')
                ))
                ->add('levelEducation', TextType::class, array(
                    'label' => 'Nivel Educativo',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control m-xs-b-3')
                ))
                ->add('yearBirth', ChoiceType::class, [
                    'choices' => $this->getYears(1986),
                    "attr" => array("class" => "form-control m-xs-b-3")
                ])
                ->add('image', FileType::class, array(
                    'label' => 'Foto',
                    'required' => false,
                    'data_class' => null,
                    'attr' => array(
                        'class' => 'form-image form-control'
                    )
                ))
                ->add('Editar', SubmitType::class, array(
                    'attr' => array(
                        'class' => 'btn btn-form-register m-xs-tb-3')
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'adminbundle_user';
    }

    private function getYears($min, $max = 'current') {
        $years = range($min, ($max === 'current' ? date('Y') : $max));

        return array_combine($years, $years);
    }

}
