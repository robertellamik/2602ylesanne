<?php
$kuud = array(
	"1" => "jaanuar",
	"2" => "veebruar",
	"3" => utf8_decode("märts"),
	"4" => "aprill",
	"5" => "mai",
	"6" =>"juuni",
	"7" =>"juuli",
	"8" =>"august",
	"9" =>"september",
	"10" =>"oktoober",
	"11" =>"november",
	"12" =>"detsember");
foreach($kuud as $x=>$x_value)
{
	echo "" . $x . "." . $x_value;
	echo "<br>";
}
?>