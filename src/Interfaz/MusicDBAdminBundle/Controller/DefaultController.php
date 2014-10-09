<?php

namespace Interfaz\MusicDBAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InterfazMusicDBAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
