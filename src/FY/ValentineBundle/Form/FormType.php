<?php
/**
 * Created by PhpStorm.
 * User: criss
 * Date: 07/02/17
 * Time: 15:10
 */

namespace FY\ValentineBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('baptismChoice', RadioType::class, array(
                'attr' => array(
                    'id' => "test1",
                )
            ))
            ->add('giftChoice', RadioType::class, array(
                'attr' => array(
                    'id' => "test2",
                )
            ))
            ->add('firstName', TextType::class, array('label' => 'prénom','required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'first_name',
                )
            ))
            ->add('lastName', TextType::class, array('required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'last_name',
                )
            ))
            ->add('authorEmail', EmailType::class, array('required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'if' => 'email'
                )
            ))
            ->add('authorPhone', NumberType::class, array('required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'icon_telephone',
                )
            ))
            ->add('city', TextType::class, array('required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'city',
                )
            ))
            ->add('comment', TextareaType::class, array('required' => true,
                'attr' => array(
                    'class' => 'materialize-textarea',
                    'id' => 'textarea1',
                )
            ))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

}