<?php

namespace inseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use inseadBundle\Entity\createTrip;
use inseadBundle\Form\createTripType;
use Symfony\Component\HttpFoundation\Request;

class PlanTripController extends Controller
{
    public function addTripAction(Request $request)
    {
        $trip = new createTrip();
        $form = $this->createForm(createTripType::class, $trip);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($trip);
            $em->flush();

            return $this->redirectToRoute('insead_trip');
        }
        return $this->render('@insead/user/planTrip.html.twig', array(
            'form' => $form->createView(),
            'trip' => $trip
        ));
    }

}
