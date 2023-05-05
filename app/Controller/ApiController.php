<?php

namespace App\Controller;

use Models\ApiClient;

class ApiController
{
    private ApiClient $client;

    public function __construct()
    {
        $this->client = new ApiClient();
    }

   public function search(): array
   {
       return $this->client->fetchCharacters();
   }
}