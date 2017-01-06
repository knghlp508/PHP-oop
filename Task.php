<?php

class Task{
    public $description;
    public $complete=false;

    public function __construct($description)
    {
        $this->description=$description;
    }

    public function complete()
    {
        $this->complete=true;
    }
}

$task=new Task('learn oop');
$task2=new Task('learn php');
$task->complete();
var_dump($task->complete);
var_dump($task->description);
var_dump($task2->description);