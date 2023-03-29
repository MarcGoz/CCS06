<?php
$name =  $argv[1];
$birthYear = $argv[2];


$age = date('Y') - $birthYear;






$voter = $age >= 18 ? "You are a voter ": "";
$senior = $age >= 60 ? "You are a senior citizen": "";




echo "Your name is $name, and your $age years old \n";
echo "$voter\n";
echo "$senior\n";
?>
