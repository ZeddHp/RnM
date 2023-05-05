<?php

namespace Models;

use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client(
            ['verify' => false]
        );
    }

    public function fetchCharacters() :array
    {
        $response = $this->client->get('https://rickandmortyapi.com/api/character');
        $fetchRecords = json_decode($response->getBody()->getContents());
        return $this->createCollection($fetchRecords->results);
    }


    private function createCollection(array $fetchRecords) :array
    {
        $collection = [];
        foreach ($fetchRecords as $character) {
            $collection[] = new Character(
                $character->name,
                $character->species,
                $character->status,
                $character->gender,
                $character->origin->name,
                $character->episode[0],
                $character->imageURL
            );
        }
        return $collection;
    }
}