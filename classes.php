<?php

/**
 * 
    ##### Class & Objects #####
 *  
 *  every class has properties and methods 
 *    
 *  variable inside the class = property
 *  variable outside the class = variable
 * 
 *  function inside class = method
 *  function outside class = function
 * 
 *  ex) Blog Website 
 *      class = code to add new post , news , ...
 *      object = post , news , ...
 * 
 * 
      ## INHERETANCE ##
 *  
 *        SuperClass => parent 
 *        subClass   => child 
 * 
 * 
 * 
     ## Final ##
 * 
 *  final class ClassName {} ==> this is a class you cannot inheret from 
 * 
 *  class ClassName{
 * 
 *      final public function FnName (){} ==> this is a function you can not override on it ,
 *                                             that is mean you can use it in new class that inheret from the SUBCLASS but you cannot edit it .
 * 
 */

#################################################################################################################################################

class blog {

    // Properties
  
    public $title = "default title";
    public $content = "default content";
    public $auther = "default auther";

    private $password ;

    const MINCHAR = 5;

    // you can give the properties default value
   

    // Methods
    // you can give the method default value


    public function content_type($type='default type'){
        echo "this is a $type <br>";
    }

    
    public function info(){
        echo "<br> the title of this blog is $this->title <br>
              the content of this blog is $this->content <br>
              the auther of this blog is $this->auther <br>";
    }

    public function content_length(){
        if (strlen($this->content) < self::MINCHAR){
            // :: -> scope resolution operator
            echo "the content is less than ". self::MINCHAR . " Characters";
        }else{
            echo "the content is ok";
        }
    }

    public function cahnge_plog_details($t, $c, $a){
        $this->title = $t;
        $this->content = $c;
        $this->auther = $a;
    }

    public function change_UserPassword($p){

     // $this->password = sha1($p);
        $this->password = hash('sha256', $p);
        
        // we can use [ sha1( peoperty ) ] or [ hash( hashing algorithm , property ) ] for encrypt the password .
        
    }
 }




 #################################################################################################################################################
  


 class VideoBlog extends blog {

    public $duration ;

    public function change_VideoBlog_details($t, $c, $a, $d)
    {
        $this->title = $t;
        $this->content = $c;
        $this->auther = $a;
        $this->duration =$d;
    }
 }



#################################################################################################################################################


                                                                ### Abstract Class ####



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


######################################################################################################################################################



                                                                 ## POLYMORHISM ==> INTERFACE ## 


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


#################################################################################################################################################



                                                            ## CHAINING  METHODS ##



class chaining_methods {
    public function method1(){
        echo "method1 <br>";
        return $this;
    }

    public function method2(){
        echo "method2 <br>";
        return $this;
    }

    public function method3(){
        echo "method3 <br>";
        return $this;
    }
}                                                           