<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class QuestionAdminType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $numbers = array(
            "1" => "1",
            "2" => "2",
            "3" => "3",
            "4" => "4",
            "5" => "5",
            "6" => "6",
            "7" => "7",
            "8" => "8",
            "9" => "9",
            "10" => "10"
        );
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control m-xs-b-2')
                ))
                ->add('exam', EntityType::class, array(
                    'class' => 'AdminBundle:Exam',
                    'choice_label' => 'name',
                    'label' => 'Examenes',
                    'attr' => array(
                        'class' => 'form-control m-xs-b-2')
                ))
                ->add('numberquestion', ChoiceType::class, array(
                    'label' => 'Numero de Pregunta',
                    'placeholder' => 'Selecciona una opción',
                    'empty_data' => null,
                    'choices' => $numbers,
                    'required' => 'required',
                    "attr" => array("class" => "form-control")
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
            'data_class' => 'AdminBundle\Entity\QuestionAdmin'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'adminbundle_question_admin';
    }

}
