<?php

$length=12;
$width=13;


if ($length==$width)
{
	$area = "The shape is a square";
}
else{

$area=$length*$width;
$perimeter=2*($length + $width);

echo " Area: $area <br>";  
echo " Perimeter: $perimeter <br>"; 

}


?>