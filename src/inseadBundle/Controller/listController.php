<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class listController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/list.html.twig', array(
            // ...
        ));
    }

}