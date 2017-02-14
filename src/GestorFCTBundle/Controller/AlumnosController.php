<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Alumnos;
use Symfony\Component\HttpFoundation\Request;

class AlumnosController extends Controller
{

  public function allAction()
  {
      $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Alumnos');
      // find *all* alum
      $alum = $repository->findAll();
      return $this->render('GestorFCTBundle:Alumnos:all.html.twig',array("alumnos"=>$alum));
  }


}
