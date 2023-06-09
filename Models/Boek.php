<?php

class Boek
{
    private String $Naam;
    private String $Auteur;
    private Int $Jaar;
    private Float $Prijs;
    private Int $Isbn;

    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
    }

    public function  __construct(String $naam, String $auteur, Int $jaar, Float $prijs, Int $isbn)
    {
        $this->Naam = $naam;
        $this->Auteur = $auteur;
        $this->Jaar = $jaar;
        $this->Prijs = $prijs;
        $this->Isbn = $isbn;
    }   
}

?>