<?php

/**
 * 
 *     Class & Objects 
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
 */

#################################################################################################################################################


 class blog {

    // Properties
  
    public $title = "default title";
    public $content = "default content";
    public $auther = "default auther";

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
            echo "the content is too short";
        }else{
            echo "the content is ok";
        }
    }

    public function cahnge_plog_details($t, $c, $a){
        $this->title = $t;
        $this->content = $c;
        $this->auther = $a;
    }
 }

#################################################################################################################################################
  
 $post  = new blog();
 // -> = object operator  
 $post->title='post title';
 $post->content='post content';
 $post->auther='auther';
 $post->date='29/1/2025';

 $post->content_type('post'); 
 $post->info();
 $post->content_length();


 echo "<pre>";
 print_r($post);
 echo "</pre>";

#################################################################################################################################################


  $news  = new blog();
  // -> = object operator  
  $news->title='news title';
  $news->content='content';
  $news->auther='auther 2';

  $news->content_type('news');
  $news->content_length();

  echo "<pre>";
  print_r($news);
  echo "</pre>";


#################################################################################################################################################


 $object3 = new blog(); 

 $object3->content_type();

  echo "<pre>";
  print_r($object3);
  echo "</pre>";



  #################################################################################################################################################

  $object4 = new blog();
  $object4->cahnge_plog_details('new title', 'new content', 'new auther');

  echo "<pre>";
  print_r($object4);
  echo "</pre>";