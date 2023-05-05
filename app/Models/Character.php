<?php

namespace Models;

class Character
{
    private string $name;

    private string $species;

    private string $status;

    private string $gender;

    private string $location;

    private string $firstSeen;

    private string $imageURL;

    /**
     * @param string $name
     * @param string $species
     * @param string $status
     * @param string $gender
     * @param string $location
     * @param string $firstSeen
     * @param string $imageURL
     */
    public function __construct(string $name, string $species, string $status, string $gender, string $location, string $firstSeen, string $imageURL)
    {
        $this->name = $name;
        $this->species = $species;
        $this->status = $status;
        $this->gender = $gender;
        $this->location = $location;
        $this->firstSeen = $firstSeen;
        $this->imageURL = $imageURL;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
    


    public function getImageURL(): string
    {
        return $this->imageURL;
    }




}