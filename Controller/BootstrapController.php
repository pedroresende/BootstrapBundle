<?php

namespace PedroResende\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;

class BootstrapController extends Controller
{
    public function indexAction()
    {
        return $this->render('BootstrapBundle::layout.html.twig');
    }
}
