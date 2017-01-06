<?php

class Person
{

    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name;
    }

    public function setAge($age)
    {
        if($age<18) throw new Exception('not old enough');
        $this->age=$age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$ming=new Person('Ming');
$ming->setAge(27);
var_dump($ming->getAge());