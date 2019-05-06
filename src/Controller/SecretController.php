<?php 


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecretController extends AbstractController
{
    public function secretAction(Request $request)
    {
        $hyphen = 'Hellow George';
        return $this->render('/pages/secretpage.html.twig',
        ['somevar' => $hyphen ]);
    }
}