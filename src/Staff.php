<?php
namespace LearnOop;

class Staff{
    protected $members=[];

    public function add(Person $person)
    {
        $this->members[]=$person;
    }
}