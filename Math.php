<?php

class Math
{
    public static $age=2;

    public function haveBirthday()
    {
        self::$age++;
    }

    public static function add()
    {
        return array_sum(func_get_args());
    }
}
//$math=new Math();
//var_dump($math->add(1,2,3,4));
var_dump(Math::add(1,2,3));

$Jack=new Math();
$Jack->haveBirthday();
$Jack->haveBirthday();
$kate=new Math();
$kate->haveBirthday();
$kate->haveBirthday();
$kate->haveBirthday();
var_dump(Math::$age);