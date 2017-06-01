<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Empresas;
use GestorFCTBundle\Form\EmpresasType;
use Symfony\Component\HttpFoundation\Request;

class EmpresasController extends Controller
{

  public function allAction()
  {
      $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Empresas');
      // find *all* emp
      $emp = $repository->findAll();
      return $this->render('GestorFCTBundle:Empresas:all.html.twig',array("empresas"=>$emp));
  }

  public function newAction(Request $request)
  {
    $empresas=new Empresas();
    $form=$this->createForm(EmpresasType::class,$empresas);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
      $empresas=$form->getData();

      $em=$this->getDoctrine()->getManager();
      $em->persist($empresas);
      $em->flush();

      return $this->redirectToRoute('Empresas_all');
    }

    return $this->render('GestorFCTBundle:Empresas:new.html.twig',array("form"=>$form->createView() ));
  }

  public function deleteAction($id)
  {
      $em = $this->getDoctrine()->getManager();
      $empresas= $em->getRepository('GestorFCTBundle:Empresas')->find($id);
      $em->remove($empresas);
      $em->flush();
      return $this->redirectToRoute('Empresas_all');
  }

}
