<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    public function getOrders()
    {
        $em = $this->getDoctrine()->getManager();

        $listOrders = $em->getRepository("App:Orders")->findAll();

        return $this->render('order/order.html.twig',[
            'lista' => $listOrders    
        ]);
    }
}
