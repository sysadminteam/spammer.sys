<?php
include 'function.php';

/*
    Matahari Mall Client System
    Made by Handika Pratama
    Modified by Fray117
*/

$init = new mataharimall();
// Configure Mataharimall Account
$init->email = "zumupolij@c1oramn.com";
$init->pass = "Hilih kintil";
$init->Login($init->email,$init->pass);

// Execution
echo "Target (using country code): ";
$a = trim(fgets(STDIN));
$init->target = "$a";
echo "Threads: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->target);
}
