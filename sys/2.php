<?php
include 'functions.php';
/*
    PHD Client System
    Developed by Handika Pratama
    Modified by Fray117
*/
echo "Target: ";
$target = trim(fgets(STDIN));
echo "Threads: ";
$thread = trim(fgets(STDIN));
echo "Delay: ";
$delays = trim(fgets(STDIN));
$execute = telkomsel($target, $thread, $delays);
print $execute;
?>
