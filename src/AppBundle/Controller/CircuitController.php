<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


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

        return $this->render('circuit/add.html.twig', array(
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

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/add", name="circuit_show")
     * @Method("GET")
     */
    public function addAction()
    {
        return $this->render('circuit/add.html.twig');

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

        $formBuilder = $this->createFormBuilder($circuit);

        $formBuilder
            ->add('Description', 'text')
            ->add('Pays Départ',  'text')
            ->add('Ville Départ', 'text')
            ->add('Ville Arrivée', 'text')
            ->add('Durée Circuit', 'text')
        ;

        $form = $formBuilder->getForm();

        return $this->render('circuit/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
