<?php
include 'functions.php';
/*
    whiskas Client System
    Made by Handika Pratama
    Modified by Fray117
*/
$init = new whiskas();
echo "\033[32;1mTarget: ";
$target = trim(fgets(STDIN));
echo "Threads: ";
$thread = trim(fgets(STDIN));
$init->target = "$target";
$loop = "$thread";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->target);
}
