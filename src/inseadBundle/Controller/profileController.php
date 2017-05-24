<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class profileController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/profile.html.twig', array(
            // ...
        ));
    }

}
