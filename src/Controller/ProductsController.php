<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function getProducts()
    {
        $em = $this->getDoctrine()->getManager();

        $listProducts = $em->getRepository("App:Products")->findAll();

        return $this->render('product/product.html.twig',[
            'lista' => $listProducts    
        ]);
    }
}
