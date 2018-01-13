<?php

//New declare construct
declare(strict_types=1);

class Leaflet
{
    protected $name;
    protected $size;
    protected $colour;
    protected $paperType;

    public function setName(string $name):void
    {
        $this->name = $name;
    }
    public function getName():string
    {
        return $this->name;
    }
    public function setSize(int $size):void
    {
        $this->size = $size;
    }
    public function getSize():int
    {
        return $this->size;
    }
    public function setColour(string $colour):void
    {
        $this->colour = $colour;
    }
    public function getColour():string
    {
        return $this->colour;
    }
    public function setPaperType(string $paperType)
    {
        $this->paperType = $paperType;
    }
}



//rozmiar kolory rodzaj papieru 