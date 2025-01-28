<?php

/**
 * 
 *     Class & Objects 
 * 
 *  ex) Blog Website 
 *      class = code to add new post , news , ...
 *      object = post , news , ...
 * 
 */

 class blog {

    // Properties
    // variable inside the class = property
    public $title;
    public $content;
    public $auther;
 }


 // variable outside the class = variable
 $object1  = new blog('title', 'content', 'auther');

 echo "<pre>";
 print_r($object1);
 echo "</pre>";