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
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddController extends CircuitController
{
    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/add", name="circuit_add")
     */
    public function addAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException();
        }

        $circuit = new Circuit();

        $formBuilder = $this->createFormBuilder($circuit);

        $formBuilder
            ->add('Description', TextareaType::class)
            ->add('PaysDepart', TextType::class)
            ->add('VilleDepart', TextType::class)
            ->add('VilleArrivee', TextType::class)
            ->add('DureeCircuit', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Circuit'));

        $form = $formBuilder->getForm();

        ///
        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            $circuit = new Circuit();
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

        // À ce stade, le formulaire n'est pas valide car :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
        return $this->render('circuit/add.html.twig', array(
            'form' => $form->createView()));
    }

}