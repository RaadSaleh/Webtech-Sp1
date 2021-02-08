<?php

$marks = 90;

if ($marks>=90)
{
	$grade = "A+";
}
else if($marks<90 && $marks>=80)
{
	$grade = "A";
}
else if($marks>=70 && $marks<80)
{
	$grade = "B";
}
else if($marks>=60 && $marks<70)
{
	$grade = "C";
}
else
{
	$grade = "Fail";
}

echo "Student grade: $grade";
?>