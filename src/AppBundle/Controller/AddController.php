<?php
/**
 * Created by PhpStorm.
 * User: xarboule
 * Date: 14/10/16
 * Time: 12:48
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddController extends CircuitController
{
    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/add", name="circuit_add")
     * @Method("GET")
     */
    public function addAction()
    {
        $circuit = new Circuit();

        $formBuilder = $this->createFormBuilder($circuit);

        $formBuilder
            ->add('Description', TextareaType::class)
            ->add('PaysDepart', TextType::class)
            ->add('VilleDepart', TextType::class)
            ->add('VilleArrivee', TextType::class)
            ->add('DureeCircuit', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'));

        $form = $formBuilder->getForm();

        return $this->render('circuit/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/add", name="circuit_post")
     * @Method("POST")
     */
    public function addCircuit()
    {

        $circuit = new Circuit();
        $circuit->setPaysDepart("TOMBOUCTOU");
        $circuit->setDescription("C'EST SUPER GENIAAAAAAL");

        $em = $this->getDoctrine()->getManager();
        $em->persist($circuit);
        $em->flush();
        $this->indexAction();



    }
}