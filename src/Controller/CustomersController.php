<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends AbstractController
{
    public function getCustomers()
    {
        $em = $this->getDoctrine()->getManager();

        $listCustomers = $em->getRepository("App:Customers")->findAll();

        return $this->render('customer/customer.html.twig',[
            'lista' => $listCustomers    
        ]);
    }
}
