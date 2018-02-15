<?php
/**
 * Created by PhpStorm.
 * User: youness
 * Date: 2018-02-13
 * Time: 5:30 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/",name="homepage")
     */
    public function homeAction(Request $request){


        $username=$request->server->get('USERNAME');

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->findBy([
            'username'=>$username
        ]);


        return $this->render('default/index.html.twig',[
            'user'=>$user[0]
        ]);

    }
    /**
     * @Route("/index",name="index")
     */
    public function frontEndAction(Request $request){


        return $this->render('index.html.twig');

    }

}