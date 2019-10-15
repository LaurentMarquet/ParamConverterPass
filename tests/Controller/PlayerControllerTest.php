<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayerControllerTest extends WebTestCase
{
    public function testDisplay()
    {
        $client = static ::createClient();
        $client->request('GET', '/player/1');

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'), $response->headers);
    }

    public function testBadIdentifier(){
        $client = static ::createClient();
        $client->request('GET', '/player/2');

        $response = $client->getResponse();
        $this->assertEquals(404, $response->getStatusCode());
    }
}
