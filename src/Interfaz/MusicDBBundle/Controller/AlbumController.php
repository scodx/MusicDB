<?php

namespace Interfaz\MusicDBBundle\Controller;

use Interfaz\MusicDBBundle\Entity\Album;
use Interfaz\MusicDBBundle\Entity\Artist;
use Interfaz\MusicDBBundle\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AlbumController extends Controller
{


	public function testAction()
	{

		$genero = new Genre();
		$genero->setName("Pop");

		$artist = new Artist();
		$artist->setName('Nombre');


			$em = $this->getDoctrine()->getManager();
			$em->persist($genero);
			$em->persist($artist);

			$em->flush();

			return new Response($artist->getIdartist());


	}

	public function agregarAction(Request $request)
	{

		$album = new Album();

		$form = $this->createFormBuilder($album)
			->add("name", 'text')
			->add('artistartist', 'entity', array(
					'class' => 'InterfazMusicDBBundle:Artist',
					'property' => 'name'
				))
			->add('genregenre', 'entity', array(
					'class' => 'InterfazMusicDBBundle:Genre',
					'property' => 'name'
				))
			->add('save', 'submit', array('label' => 'Enviar Album'))
			->getForm()
			;

		$form->handleRequest($request);

		if($form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->persist($album);
			$em->flush();
		}

		return $this->render('InterfazMusicDBBundle:Album:agregar.html.twig',
			array(
				'form' => $form->createView()
				));



	}


}