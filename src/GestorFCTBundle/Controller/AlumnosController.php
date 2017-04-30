<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Alumnos;
use GestorFCTBundle\Form\AlumnosType;
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

  public function newAction(Request $request)
  {
    $alumnos=new Alumnos();
    $form=$this->createForm(AlumnosType::class,$alumnos);

    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
      $empresa=$form->getData();

      $em=$this->getDoctrine()->getManager();
      $em->persist($empresa);
      $em->flush();

      return $this->redirectToRoute('Alumnos_all');
    }

    return $this->render('GestorFCTBundle:Alumnos:new.html.twig',array("form"=>$form->createView() ));
  }

}
