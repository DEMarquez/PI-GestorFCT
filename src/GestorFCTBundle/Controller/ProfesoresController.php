<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Profesores;
use GestorFCTBundle\Form\ProfesoresType;
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

  public function newAction(Request $request)
  {
    $profesor=new Profesores();
    $form=$this->createForm(ProfesoresType::class,$profesor);

    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
      $profesor=$form->getData();

      $em=$this->getDoctrine()->getManager();
      $em->persist($profesor);
      $em->flush();

      return $this->redirectToRoute('Profesores_all');
    }

    return $this->render('GestorFCTBundle:Profesores:new.html.twig',array("form"=>$form->createView() ));
  }

}
