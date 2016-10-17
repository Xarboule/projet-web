<?php
/**
 * Created by PhpStorm.
 * User: xarboule
 * Date: 16/10/16
 * Time: 18:01
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Circuit;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class ModifyController extends CircuitController
{
    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/modify/{id}", name="circuit_modify", requirements={
     *              "id": "\d+"})
     */
    public function modifyAction(Request $request, $id)
    {
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();

        $circuit = $em->getRepository('AppBundle:Circuit')->find($id);


        $formBuilder = $this->createFormBuilder($circuit);

        $formBuilder
            ->add('Description', TextareaType::class)
            ->add('PaysDepart', TextType::class)
            ->add('VilleDepart', TextType::class)
            ->add('VilleArrivee', TextType::class)
            ->add('DureeCircuit', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Modifier Circuit'));

        $form = $formBuilder->getForm();

        ///
        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            $circuit->setPaysDepart($form->get('PaysDepart')->getData());
            $circuit->setDescription($form->get('Description')->getData());
            $circuit->setVilleDepart($form->get('VilleDepart')->getData());
            $circuit->setVilleArrivee($form->get('VilleArrivee')->getData());
            $circuit->setDureeCircuit($form->get('DureeCircuit')->getData());

            $em = $this->getDoctrine()->getManager();
            $em->persist($circuit);
            $em->flush();
            $this->indexAction();
            return $this->redirectToRoute('circuit_index');
        }

        return $this->render('circuit/modify.html.twig', array(
            'form' => $form->createView()));
    }

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/remove/{id}", name="circuit_remove", requirements={
     *              "id": "\d+"})
     * @Method("GET")
     */
    public function removeCircuit($id)
    {

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getEntityManager();
        $circuit = $em->getRepository('AppBundle:Circuit')->find($id);

        $em->remove($circuit);
        $em->flush();

        return $this->redirect($this->generateUrl('circuit_index'));


    }

}