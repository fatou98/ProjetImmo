<?php

namespace HTL\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class APIControllerTest extends WebTestCase
{
    public function testAddbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/addbien');
    }

    public function testEditbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/editbien');
    }

    public function testDeletebien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/deleteproprietaire');
    }

    public function testUpdateproprietaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/updateproprietaire');
    }

    public function testAllproprietaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/allproprietaire');
    }

}
