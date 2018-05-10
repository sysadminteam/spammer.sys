<?php
include 'functions.php';
/*
    KFC Client System
    Made by Handika Pratama
    Modified by Fray117
*/
$init = new kfc();
echo "Target (use country code): ";
$target = trim(fgets(STDIN));
echo "Threads: ";
$thread = trim(fgets(STDIN));
$init->target = "$target";
$loop = "$thread";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->target);
}
