<?php

namespace Tasatko\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        return $this->render(
            'TasatkoAdminBundle:Index:index.html.twig'
        );
    }
}
