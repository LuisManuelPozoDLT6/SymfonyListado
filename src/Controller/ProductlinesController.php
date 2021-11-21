<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductlinesController extends AbstractController
{
    public function getProductLines()
    {
        $em = $this->getDoctrine()->getManager();

        $listProductLines = $em->getRepository("App:ProductLines")->findAll();

        return $this->render('productLine/productLine.html.twig',[
            'lista' => $listProductLines    
        ]);
    }
}
