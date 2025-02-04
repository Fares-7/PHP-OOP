<?php   

/**
 * 
 *             ##### TRAIT #####
 * 
 *  - Trait is a mechanism in PHP that allows you to reuse code in several independent classes.
    - you cannot extend or implement a trait.
 *  - you can use multiple traits in one class.
    - you cannot make an object from a trait.
*   - have priority over class.
*   - trait can inherit from another trait.
 */



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