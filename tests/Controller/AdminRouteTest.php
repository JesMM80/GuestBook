<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminRouteTest extends WebTestCase
{
    public function testAdminRouteExists(): void
    {
        $client = static::createClient();

        // Realizar una petición GET a la ruta /admin
        $client->request('GET', '/');

        // Verificar que la respuesta tenga un código de estado 200 (OK)
        $this->assertResponseStatusCodeSame(200);
    }
}
