# Different Between Abstract , Interface and Trait

## Abstract

 - Abstract Made For other classes to inheret from it.
 - Abstract class can have both abstract and non-abstract methods.
 - Abstract class can not be instantiated (you cannot create an object of an abstract class).
 - Abstract class can have Properties.


 ```php
 abstract class test {

    public $test;

    public function FunctionName() {
        
    }

    abstract public function AbstractMethod($arg);  // abstract method didn`t have a body but can give it a parameter and must be used in the SUBCLASSES .
}                                                   /** This Is The Ideal Case , because if any thing happen to the ABSTRACT class in the future 
                                                        the class that inheret from it will not suffer from any thing                           */


class test2 extends test { 

    public $user;

    public function FunctionName() {
        echo "test2 <br>";
    }
    
    public function AbstractMethod($arg) // must be used 
    {
        $this->user=$arg;
        echo "the user is $this->user";    // here we can use the user property that we created in this class
    }
}



class test3 extends test2 {



    
    public function FunctionName() {
        echo "test3 <br>";
    }

    public function AbstractMethod($arg) // must be used
    {
        $this->test=$arg;

        echo "the user is $this->test";   // here we can use the test property that we created in the ABSTRACT class
    }
}

 
  ```


  *** 

  ## Interface

  - Interface is like abstract class but it can only have abstract methods.
  - Interface cannot have properties.
  
  ```php

interface subscribtion {
    public function askUserSubscription();    // must be used in the SUBCLASSES
}                                   


class app1 implements subscribtion {
    public function askUserSubscription()
    {
        echo "you may give me subscription for advanced labs";
    }
}


class app2 implements subscribtion{
    public function askUserSubscription()
    {
        echo "you must give me subscription to use varnalability checker";
    }
}


  ```


  ***

  ## Trait

 - Trait is a mechanism in PHP that allows you to reuse code in several independent classes.
- you cannot extend or implement a trait.
- you can use multiple traits in one class.
- you cannot make an object from a trait.
- have priority over class.
- trait can inherit from another trait.

```php  
trait trait1 {
    public function feature1(){
        echo "this is feature 1 <br>";
    } 
} 

trait trait2 {
    public function feature2(){
        echo "this is feature 2";
    }
}


class class1 {
    use trait1;
    use trait2;
}

$object1 = new class1 ;
$object1->feature1();
$object1->feature2();
echo "<pre>";
print_r($object1);
echo "</pre>";


#######################################


trait trait3{
    public function feature(){
        echo "this is trait num 3"."<br>";
    }
}

trait trait4{
    public function feature(){
        echo "this is trait num 4"."<br>";
    }
}


trait trait5 {
    use trait3,trait4{
        trait3::feature as newfeature;      // rename the methode in trait3 to use it 
        trait4::feature insteadOf trait3;  // using the method in trait4
    }
}

class class2{
    use trait5;
}

$object2 = new class2;
$object2 -> feature();
$object2 -> newfeature();  // the new name 

```