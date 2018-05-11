<?php
include 'functions.php';

/*
    Tokopedia Client System
    Developed by Handika Pratama
*/

$init = new tokopedia();
echo "\033[32;1mTarget: ";
$target = trim(fgets(STDIN));
$init->target = "$target";
$init->type = 1;
//$init->target = "+62895371761108";

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) {
	    $init->Verif($init->target,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->target,$init->type);
}
