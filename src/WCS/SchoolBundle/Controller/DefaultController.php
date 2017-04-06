<?php

namespace WCS\SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSSchoolBundle:Default:index.html.twig');
    }
}
