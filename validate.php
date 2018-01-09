<?php
$namepattern='/^[a-zA-Z]{5,20}$/';
if(!preg_match($namepattern,$_POST['name'])){
	$nameerror="enter name";
	$n=false;
}
else
{$n=true;}

?>