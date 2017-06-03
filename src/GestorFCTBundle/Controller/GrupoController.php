<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Grupo;
use GestorFCTBundle\Form\GrupoType;
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

  public function newAction(Request $request)
  {
    $grupo=new Grupo();
    $form=$this->createForm(GrupoType::class,$grupo);

    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
      $grupo=$form->getData();

      $em=$this->getDoctrine()->getManager();
      $em->persist($grupo);
      $em->flush();

      return $this->redirectToRoute('Grupo_all');
    }

    return $this->render('GestorFCTBundle:Grupo:new.html.twig',array("form"=>$form->createView() ));
  }

  public function deleteAction($id)
  {
      $em = $this->getDoctrine()->getManager();
      $grupo= $em->getRepository('GestorFCTBundle:Grupo')->find($id);
      $em->remove($grupo);
      $em->flush();
      return $this->redirectToRoute('Grupo_all');
  }

  public function updateAction(Request $request, $id)
  {
      $em=$this->getDoctrine()->getManager();
      $grupo = $em->getRepository('GestorFCTBundle:Grupo')->find($id);
      $form=$this->createForm(GrupoType::class,$grupo);
      $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $grupo=$form->getData();
              $em=$this->getDoctrine()->getManager();
              $em->flush();

            return $this->redirectToRoute('Grupo_all');
          }


      return $this->render('GestorFCTBundle:Grupo:update.html.twig',array("form"=>$form->createView() ));
  }

}
