<?php
include 'functions.php';
/*
    ZiPAY Client System
    Made by Handika Pratama
    Modified by Fray117
*/
$init = new zipay();
echo "\033[32;1mTarget: ";
$target = trim(fgets(STDIN));
echo "Threads: ";
$thread = trim(fgets(STDIN));
echo "Delay: ";
$delays = trim(fgets(STDIN));
$init->target = "$target";
$loop = "$delays";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->target);
}
