<?php namespace AppBundle\Controller;

use AppBundle\Entity\UserAnswers;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestsController extends Controller
{
    public function BeginTestAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $answer = $request->request->get('answer');
            if($answer) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($answer);
                $em->flush();
            }
        }
    }
}
