<?php


## CONSTRUCT 

class main {

    public $name;

    public function __construct($n)
    {
        $this -> name = $n;
        echo "Hello $n";
    }
}

$object = new main("fares") ;
echo "<pre>";
print_r($object);
echo "</pre>";


######################################################



## CALL


class main2 {

    private function Hello(){
        echo "hello";
    }

    public function __call($name, $arguments)
    {
        echo "This Method $name Dosen`t Exist Or Private Method <br>";
    }
}


$object2 = new main2;

$object2->test();    // --> dosen`t exist
$object2->Hello();   // --> private


echo "<pre>";
print_r($object2);
echo "</pre>";



######################################################



## GET 


class main3 {

    private $Hello;

    public function __get($name)
    {
        echo "This Property $name Dosen`t Exist Or Private Property <br>";
    }
}



$object3 = new main3;

$object3->test;    // --> dosen`t exist
$object3->Hello;   // --> private


echo "<pre>";
print_r($object3);
echo "</pre>";



######################################################



## SET


class main4 {

    private $add;

    public function __set($name, $value)
    {
        echo "you cannot add value $value in $name prop <br>";
    }
}

$object4 = new main4;

$object4->test='..';    // --> dosen`t exist    // here if we don`t use __set method we can add the new prop in the class which is wrong 
$object4->add='added';   // --> private


echo "<pre>";
print_r($object4);
echo "</pre>";



######################################################



## Clone

class main5{

    public $name;

    public function __construct($n)
    {
        $this -> name = $n;
        echo "Hello $n";
    }
    
}


$object5 = new main5("fares");

$object6 =  $object5;    // copy of reference
$object6->name="ahmed";  

echo "<pre>";
print_r($object5);
echo "</pre>";

echo "<pre>";
print_r($object6);
echo "</pre>";

$object7 = clone $object5;    // shallow copy
$object7->name="mohamed";

echo "<pre>";
print_r($object7);
echo "</pre>";



###################################################### 

