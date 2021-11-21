<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderdetailsController extends AbstractController
{
    public function getOrderDetails()
    {
        $em = $this->getDoctrine()->getManager();

        $listOrderDetails = $em->getRepository("App:OrderDetails")->findAll();

        return $this->render('orderDetails/orderDetails.html.twig',[
            'lista' => $listOrderDetails    
        ]);
    }
}
