<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanTripController extends Controller
{
    public function indexAction()
    {
        return $this->render('@insead/user/planTrip.html.twig', array(
            // ...
        ));
    }

}
