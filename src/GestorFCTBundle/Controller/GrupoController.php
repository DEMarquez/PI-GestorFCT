<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Empresas;
use GestorFCTBundle\Form\EmpresasType;
use Symfony\Component\HttpFoundation\Request;

class GrupoController extends Controller
{

  public function allAction()
  {
      $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Grupo');
      // find *all* grup
      $grup = $repository->findAll();
      return $this->render('GestorFCTBundle:Grupo:all.html.twig',array("grupo"=>$grup));
  }

}
