<?php

class Mother
{

    public function getEyesCount()
    {
        return 2;
    }

}

class Child extends Mother
{

}

class Boy extends Mother{

}

$child=new Boy();
var_dump($child->getEyesCount());