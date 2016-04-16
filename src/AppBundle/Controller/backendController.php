<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class backendController extends Controller
{
    public function indexAction()
    {
        return $this->render("back-end/index.html.twig");
    }

    public function profileAction()
    {
        return $this->render('back-end/profile.html.twig');
    }
}