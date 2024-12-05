<?php
// Parent class
class Shape
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

// Child class
class Circle extends Shape
{
    private $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Creating an instance of the Circle class
$circle = new Circle("red", 5);
echo "Circle Color: " . $circle->getColor();
echo "Circle Area: " . $circle->getArea();