<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeesController extends AbstractController
{
    public function getEmployees()
    {
        $em = $this->getDoctrine()->getManager();

        $listEmployees = $em->getRepository("App:Employees")->findAll();

        return $this->render('employee/employee.html.twig',[
            'lista' => $listEmployees    
        ]);
    }
}
