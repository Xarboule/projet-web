<?php
/**
 * Created by PhpStorm.
 * User: xarboule
 * Date: 18/10/16
 * Time: 10:22
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;
use AppBundle\Entity\Etape;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddStepController extends CircuitController
{

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/addstep/{id}", name="step_add", requirements={
     *              "id": "\d+"})
     */

    public function addStep(Request $request, Circuit $circuit)
    {

        $etape = new Etape();

        $formBuilder = $this->createFormBuilder($etape);

        $formBuilder
            ->add('NumeroEtape', TextType::class)
            ->add('VilleEtape', TextType::class)
            ->add('NombreJours', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => "Ajouter l'étape"));

        $form = $formBuilder->getForm();

        $form->handleRequest($request);


        if ($form->isValid()) {
            $etape->setNumeroEtape($form->get('NumeroEtape')->getData());
            $etape->setVilleEtape($form->get('VilleEtape')->getData());
            $etape->setNombreJours($form->get('NombreJours')->getData());
            $etape->setCircuit($circuit);

            $circuit->addEtape($etape);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($etape, $circuit);
            $em->flush();
            return $this->redirectToRoute('circuit_index');
        }

        return $this->render('circuit/addStep.html.twig', array(
            'form' => $form->createView()));
    }
}
