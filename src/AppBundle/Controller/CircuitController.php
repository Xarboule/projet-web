<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;

/**
 * Circuit controller.
 */
class CircuitController extends Controller
{
    /**
     * Lists all Circuit entities.
     *
     * @Route("/circuit/", name="circuit_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();

        return $this->render('circuit/index.html.twig', array(
            'circuits' => $circuits,
        ));
    }

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/{id}", name="circuit_show", requirements={
	 *              "id": "\d+"
	 *     })
     * @Method("GET")
     */
    public function showAction(Circuit $circuit)
    {
        return $this->render('circuit/show.html.twig', array(
            'circuit' => $circuit,
        ));

    }

    public function addCircuit()
    {

        $circuit = new Circuit();
        $circuit->setPaysDepart("TOMBOUCTOU");
        $circuit->setDescription("C'EST SUPER GENIAAAAAAL");

        $em = $this->getDoctrine()->getManager();
        $em->persist($circuit);
        $em->flush();

    }

    public function newAction(Request $request)
    {
        $circuit = new Circuit();

        $formBuilder = $this->get('form.factory')->createBuilder('form', $circuit);

        $formBuilder
            ->add('',      'date')
            ->add('title',     'text')
            ->add('content',   'textarea')
            ->add('author',    'text')
            ->add('published', 'checkbox')
            ->add('save',      'submit')
        ;

        $form = $formBuilder->getForm();

        return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
