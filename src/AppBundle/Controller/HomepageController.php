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



class HomepageController extends Controller
{
    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function homepageAction()
    {

        return $this->render('homepage/homepage.html.twig');
    }
}