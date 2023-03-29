<?php






function greet() {
    $message = "Hello";
    $message .= " World!";
    $message .= "The date today is ";
    $message .= date("m d Y");
   
   
    return $message;
}


echo greet();
?>