<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller {

    /**
     * @Route("/hello", name="hello")
     */
    function hello() {

        return $this->render('Hello/hello.html.twig');
    }

    /**
     * @Route("/hello/menu", name="menu")
     */
    function menu() {
        return $this->render('menu.html.twig');
    }

    /**
     * @Route("/hello/page1", name="page1")
     */
    function page1() {
        return $this->render('Hello/page1.html.twig');
    }

    /**
     * @Route("/hello/page2", name="page2")
     */
    function page2() {
        return $this->render('Hello/page2.html.twig');
    }

}