<?php
$a = 5;

if ($a === 5){
    echo "\$aは5です";
}
echo "<br/>";
$a = 7;

if ($a === 5){
    echo "\$aは5です";
}elseif ($a === 7) {
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
echo "<br/>";
$a = 20;
$b = 7;

if ($a > 10 && $a < 30) {
    echo "over10";
}
$people = "Saburo";

switch ($people) {
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}
echo "<br/>";
$a = 7;
$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;