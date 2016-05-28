<?php

namespace WebDevBr\Android\Clients;

class Guzzle implements Contract
{
    private $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client;
    }

    public function post($url, array $config)
    {
        return $this->client->post($url, $config);
    }

    public function getBody()
    {
        return $this->client->getBody();
    }
}