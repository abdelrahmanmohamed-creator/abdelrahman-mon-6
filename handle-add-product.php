<?php

require_once('function.php');

if(isset($_POST['submit'])){

    $name = $_POST['user'];
    $msg  = $_POST['msg'];
    $currency =$_POST['price'];


    $Errors=[];


    if(empty($name)){
        $Errors[]="please enter your name";
    }elseif(! is_string($name)){
        $Errors[]="Your Name Must Be String";
    }elseif($name>5 && $name<255){
        $Errors[]="Your Name Must Be Between 5 and 255 chars";
    }

    if(empty($msg)){
        $Errors[]="please enter your Description Here";
    }elseif(! is_string($msg)){
        $Errors[]="Your Description Must Be String";
    }


    if(empty($name)){
        $Errors[]="please enter your name";
    }elseif(! is_string($name)){
        $Errors[]="Your Name Must Be String";
    }elseif($name>5 && $name<255){
        $Errors[]="Your Name Must Be Between 5 and 255 chars";
    }

    if(empty($currency)){
        $Errors[]="please enter Price Here";
    }elseif(! is_numeric($currency)){
        $Errors[]="Your price Must Be Number";
    }elseif($currency>=0){
        $Errors[]="Your Name Must Be Between 5 and 255 chars";
    }

    
}
