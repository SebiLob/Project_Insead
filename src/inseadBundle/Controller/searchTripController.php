<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class searchTripController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/searchTrip.html.twig', array(
            // ...
        ));
    }

}
