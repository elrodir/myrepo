<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function sidebarAction($path)
    {
        $name = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
        return $this->render('AppBundle:home:sidebar.html.twig', [
            'username' => $name,
            'path' => $path
        ]);
    }
}