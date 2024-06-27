<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        // return $this->render('conference/index.html.twig', [
        //     'controller_name' => 'ConferenceController',
        //     'prueba' => 'hola!',
        // ]);
        return new Response(<<<HTML
                    <html>
                        <body>
                            <img src="/images/under-construction.gif" />
                            <p>
                                Hola!
                            </p>
                        </body>
                    </html>
                    HTML
                );
    }
}


