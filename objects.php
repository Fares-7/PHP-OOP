<?php

include 'classes.php';
 
#################################################################################################################################################
  
 $post  = new blog();

 // -> = object operator  
 $post->title='post title';
 $post->content='post content';
 $post->auther='auther';
 $post->date='2\12\2003';

 
//  $post->password='1234';           // Cannot access private property blog::$password
// echo $post->password ;                // Cannot access private property blog::$password

$post->change_UserPassword('1234');      // this is the right way to change private property ==> ENCAPSUALTION 

 $post->content_type('post'); 
 $post->info();
 $post->content_length();


 echo "<pre>";
 print_r($post);
 echo "</pre>";


 echo "################################################################################################################################################# <br>";
#################################################################################################################################################


  $object4 = new blog();

  $object4->cahnge_plog_details('new title', 'new content', 'new auther');  // here num of the variabels must be == num of parametrs. 
  $object4->change_UserPassword('2468');

  echo "<pre>";
  print_r($object4);
  echo "</pre>";



  echo "################################################################################################################################################# <br>";
  #################################################################################################################################################

  

$new = new VideoBlog();

$new->change_VideoBlog_details('video title', 'video content', 'video auther', '10 minutes'); // make a new method 
$new->change_UserPassword('test');  
$new->content_length();
$new->info();   // use method that already exist but i can`t modify it to add Video Duration 

echo "<pre>";
print_r($new);
echo "</pre>";

echo "#################################################################################################################################################";
  #################################################################################################################################################


// $objectFromAbstractClass = new test();
// echo "<pre>";
// print_r($objectFromAbstractClass);   // Error ==> Cannot instantiate abstract class
// echo "</pre>";

echo "################################################################################################################################################# <br>";
  #################################################################################################################################################


                                                    echo    "## ABSTRACT OBJECTS ##"." <br> <br>";


$objectFromTheInheretedClass = new test2();  
$objectFromTheInheretedClass->FunctionName();

$objectFromTheInheretedClass->AbstractMethod('arg');


echo "<pre>";
print_r($objectFromTheInheretedClass);
echo "</pre>";
echo"<br>";


$test = new test3();

$test->FunctionName();
$test->AbstractMethod('me');  


echo "<pre>";
print_r($test);
echo "</pre>";



echo "################################################################################################################################################# <br>";
  #################################################################################################################################################





                                                   echo    "## INTERFACE OBJECTS ##"." <br> <br>";


$app1 = new app1 ;
$app1 -> askUserSubscription();                                                   

echo "<pre>";
print_r($app1);
echo "</pre>";
echo"<br>";



$app2 = new app2 ;
$app2 -> askUserSubscription();                                                   

echo "<pre>";
print_r($app2);
echo "</pre>";
echo"<br>";



echo "################################################################################################################################################# <br>";
  #################################################################################################################################################



                                                   echo    "## CHAINING METHODS ##"." <br> <br>";


$object = new chaining_methods();
$object->method1()->method2()->method3();  // chaining methods                                                   