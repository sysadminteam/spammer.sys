<?php
include 'functions.php';
/*
    HOOQ Client System
    Made by Handika Pratama
    Modified by Fray117
*/
$init = new hooq();
echo "\033[32;1mTarget: +62";
$target = trim(fgets(STDIN));
echo "Threads: ";
$thread = trim(fgets(STDIN));
$init->target = "$target";
$loop = "$thread";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->target);
}
