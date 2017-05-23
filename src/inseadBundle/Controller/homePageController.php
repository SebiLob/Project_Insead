<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class homePageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/homepage.html.twig', array(
            // ...
        ));
    }

}
