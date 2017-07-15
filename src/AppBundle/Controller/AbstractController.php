<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return new Response('Index action.');
    }

    /**
     * @param Request $request
     * @Route("/demo/")
     * @return Response
     */
    public function demoAction(Request $request)
    {
        return new Response(sprintf("I'm %s controller", static::class));
    }
}
