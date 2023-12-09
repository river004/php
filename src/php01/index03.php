<?php
$a = "15";
$b = "3";
$c = "10";

echo $a+$b;
echo "<br/>";
echo $a-$b;
echo "<br/>";
echo $a*$b;
echo "<br/>";
echo $a/$b;
echo "<br/>";
echo $a%$c;
echo "<br/>";

$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
$b *= $d;
echo $a;
echo "<br/>";
echo $b;
echo "<br/>";
$a = 20;
$b = 5;
echo ($a>$b);
echo "<br/>";
$a = 20;
$b = 5;
echo ($a<30&&$a>10);
echo "<br/>";
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ($a = ++$a);
echo "<br/>";
echo ($b = $b++);
echo "<br/>";
echo ($c = --$c);
echo "<br/>";
echo ($d = $d--);
