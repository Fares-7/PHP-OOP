<?php

class main {
    public $name="fares";
    public static $name2="fares2"."<br>"; 

    public function printName($n){
        $this->name = $n;
        echo $this->name;
    }

    public static function printName2($n){
        self::$name2 = $n;
        echo self::$name2;
    }

}



// echo main::$name; // --> Access to undeclared static property main

echo main::$name2;  // --> fares2

// main::printName("ahmed");  // --> Uncaught Error: Non-static method main::printName() cannot be called statically

main::printName2("ahmed"."<br>");  // --> ahmed


$object = new main;
// echo $object->name2;  // مش هيقرأ ال ستاتيك ف الاوبجكت الل اتعمل
echo $object->printName2("ali");  // --> هيقرا الستاتيك ميثود عادى