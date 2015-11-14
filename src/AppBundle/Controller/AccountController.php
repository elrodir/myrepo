<?php namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\RegistrationForm;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    public function registrationAction(Request $request)
    {
        $form = $this->createForm(new RegistrationForm());
        {
            $form->handleRequest($request);
            $formData = $form->getData();
            $this->get('model.registration')->registration($formData);

            return $this->render('AppBundle:Account:registration.html.twig', array('form' => $form->createView()));
        }
    }

}