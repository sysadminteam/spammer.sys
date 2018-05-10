<?php
include 'functions.php';

/*
    JD.id Client System
    Developed by Handika Pratama
*/

echo "Target: ";
$target = trim(fgets(STDIN));
echo "Threads: ";
$thread = trim(fgets(STDIN));
echo "Delay: ";
$delays = trim(fgets(STDIN));
$execute = jdid($target, $thread, $delays);
print $execute;
