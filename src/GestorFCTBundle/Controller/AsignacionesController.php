<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Asignaciones;
use GestorFCTBundle\Form\AsignacionesType;
use Symfony\Component\HttpFoundation\Request;

class AsignacionesController extends Controller
{

  public function allAction()
  {
      $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Asignaciones');
      // find *all* asig
      $asig = $repository->findAll();
      return $this->render('GestorFCTBundle:Asignaciones:all.html.twig',array("asignaciones"=>$asig));
  }

  public function newAction(Request $request)
  {
    $asignacion=new Asignaciones();
    $form=$this->createForm(AsignacionesType::class,$asignacion);

    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
      $asignacion=$form->getData();

      $em=$this->getDoctrine()->getManager();
      $em->persist($asignacion);
      $em->flush();

      return $this->redirectToRoute('Asignaciones_all');
    }

    return $this->render('GestorFCTBundle:Asignaciones:new.html.twig',array("form"=>$form->createView() ));
  }

  public function deleteAction($id)
  {
      $em = $this->getDoctrine()->getManager();
      $asignacion= $em->getRepository('GestorFCTBundle:Asignaciones')->find($id);
      $em->remove($asignacion);
      $em->flush();
      return $this->redirectToRoute('Asignaciones_all');
  }

}
