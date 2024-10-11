<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Utility\PythagoreUtility;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    public function displayPythagoreAction(): Response
    {
        return $this->render('displayPythagore.html.twig', [
            'htmlResponse' => $this->pythagoreUtility->display(),  
            'name' => 'SABOUTEY TETTEY Fabiola'
        ]);
    }
}

