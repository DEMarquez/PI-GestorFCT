<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Empresas;
use GestorFCTBundle\Form\EmpresasType;
use Symfony\Component\HttpFoundation\Request;

class ProfesoresController extends Controller
{

  public function allAction()
  {
      $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Profesores');
      // find *all* profe
      $profe = $repository->findAll();
      return $this->render('GestorFCTBundle:Profesores:all.html.twig',array("profesores"=>$profe));
  }

}
