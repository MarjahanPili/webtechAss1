<?php

$file = "./test1.txt";
$test1=file_get_contents($file);
$lines = explode ("\n",$test1);

foreach($lines as $newline)
{
	echo '<b>' . $newline .'</b><br>';
}
?>