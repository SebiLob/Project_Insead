<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class interestController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/interest.html.twig', array(
            // ...
        ));
    }

}
