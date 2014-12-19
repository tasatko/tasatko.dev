<?php

namespace Tasatko\EditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        return $this->render(
            'TasatkoEditorBundle:Index:index.html.twig'
        );
    }
}
