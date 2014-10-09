<?php

namespace Interfaz\MusicDBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InterfazMusicDBBundle:Default:index.html.twig', array('name' => $name));
    }
}
