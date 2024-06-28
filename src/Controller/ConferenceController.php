<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConferenceController extends AbstractController
{
    #[Route('/hello/{nombre}', name: 'homepage')]
    public function index(Request $request): Response
    {
        dump($request);

         return new Response(<<<HTML
             <html>
                 <body>
                    <img src="/images/under-construction.gif" />
                 </body>
             </html>
            HTML
            );
        
    }
}


