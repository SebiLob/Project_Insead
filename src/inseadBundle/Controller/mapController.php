<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mapController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/map.html.twig', array(
            // ...
        ));
    }

}