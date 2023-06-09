<?php
require_once("Boek.php");

class Factuur
{
    private Boek $ArtikelBoek;
    private Int $Aantal;
    private Float $Korting;
    private Float $Btw;
    public Float $Bedrag;

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

    public function  __construct(Boek $artikelboek , Int $aantal, Float $korting, Float $btw)
    {
        $this->ArtikelBoek  = $artikelboek ;
        $this->Aantal = $aantal;
        $this->Korting = $korting;
        $this->Btw = $btw;
        $this->Bedrag = $this->BerekenTotaalBedrag();
    }   

    public function BerekenTotaalBedrag() : Float
    {
        return $this->ArtikelBoek->Prijs * $this->Aantal * $this->Korting * $this->Btw;
    }
}


?>