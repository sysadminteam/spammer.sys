<?php
include 'functions.php';

/*
    PHD Client System
    Made by Handika Pratama
    Modified by Fray117
*/

$init = new phd();

// Execution
echo "Target (use country code): ";
$a = trim(fgets(STDIN));
$init->target = "$a";
echo "Threads: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->target);
}
