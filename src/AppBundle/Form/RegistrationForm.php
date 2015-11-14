<?php namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text',
            array('attr' =>
                array(
                    'autofocus' => true,
                    'autocomplete' => 'off',
                    'required' => true,
                    'placeholder' => 'login',
                ),
            ));
        $builder->add('password', 'password',
            array('attr' =>
                array(
                    'autofocus' => true,
                    'autocomplete' => 'off',
                    'required' => true,
                    'palceholder' => 'password',
                ),
            ));
        $builder->add('submit', 'submit',
            array(
                'label' => 'REGISTRATION',
            ));
    }
    public function getName()
    {
        return 'registration';
    }
}
