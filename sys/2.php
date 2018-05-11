<?php
include 'functions.php';
/*
    Telkomsel Client System
    Developed by Handika Pratama
    Modified by Fray117
*/
echo "\033[32;1mTarget: ";
$target = trim(fgets(STDIN));
echo "Threads: ";
$thread = trim(fgets(STDIN));
echo "Delay: ";
$delays = trim(fgets(STDIN));
$execute = telkomsel($target, $thread, $delays);
print $execute;
?>
