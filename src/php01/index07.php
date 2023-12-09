<?php
$people = array('taro','jiro','saburo');
var_dump($people);
echo $people[1];
echo "<br/>";
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);
var_dump($people);
$people = [
  ["Taro","25","men"],
  ["Jiro","20","men"],
  ["hanako","16","women"],
];
echo "<br/>";

foreach ($people as $person) {
echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")";
echo "";
}