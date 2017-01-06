<?php
require 'vendor\autoload.php';

use LearnOop\Person;
use LearnOop\Staff;
use LearnOop\Business;

$ming=new Person('Ming');
$staff=new Staff();
$bussiness=new Business($staff);
$bussiness->hire($ming);
var_dump($staff);
