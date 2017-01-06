<?php

abstract class Shape
{
    protected $color;

    public function __construct($color='red')
    {
        $this->color=$color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea();
}

class Square extends Shape{

    protected $length=4;

    public function getArea()
    {
        return pow($this->length,2);
    }
}

class Circle extends Shape{
    public function getArea()
    {
        
    }
}
$shape=new Circle();
var_dump($shape);