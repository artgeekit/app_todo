<?php

namespace TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TodoController extends Controller
{
    public function indexAction()
    {
        return $this->render('TodoBundle:Todo:index.html.twig', array(
            // ...
        ));
    }

    public function listAllAction()
    {
        return $this->render('TodoBundle:Todo:list_all.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('TodoBundle:Todo:show.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('TodoBundle:Todo:create.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('TodoBundle:Todo:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('TodoBundle:Todo:delete.html.twig', array(
            // ...
        ));
    }

}
