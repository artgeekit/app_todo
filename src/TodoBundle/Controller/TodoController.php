<?php

namespace TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TodoController extends Controller
{
    public function indexAction()
    {
        return $this->render('TodoBundle:Main:index.html.twig', array(
            // ...
        ));
    }

    public function listAllAction()
    {
        $todos = $this->getDoctrine()
            ->getRepository('TodoBundle:Todo')
            ->findAll();
        
        return $this->render('TodoBundle:Todo/pages:list_all.html.twig', array(
            'todos' => $todos
        ));
    }

    public function showAction()
    {
        return $this->render('TodoBundle:Todo/pages:show.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('TodoBundle:Todo/pages:create.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('TodoBundle:Todo/pages:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return new Response('<htlm><body>DELETION PAGE</body></htlm>');
    }

}
