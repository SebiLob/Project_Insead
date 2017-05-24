<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class menuController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/menu.html.twig', array(
            // ...
        ));
    }

}
