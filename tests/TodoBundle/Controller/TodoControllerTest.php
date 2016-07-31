<?php

namespace TodoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TodoControllerTest extends WebTestCase
{
    public function testListAll()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listall');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show/1');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/create');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/edit/1');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete/1');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }
    
}
