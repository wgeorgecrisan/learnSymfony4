<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function baseindex()
    {
        $welcomemessage = 'Hello George';

        return $this->render('/index.html.twig',[
            'welcomemsg' => $welcomemessage
        ]);
    }
}
