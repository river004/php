<?php
function text($number1, $number2) {
    $value = $number1 + $number2;
    return $value;
}
    $total = text(3, 2);
    echo $total;
    echo "<br/>";

function tesut($score1, $score2, $score3) {
    $point = $score1 + $score2 + $score3; {
    if ($point > 210) {
        echo "合計点は" . $point . "なので合格です";
    }
    else if ($point < 210) {
        echo "合計点は" . $point . "ななので不合格です";
    }
    }
}
    $total = tesut(70, 80, 65);
    echo $total;

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "<br/>";
echo getTrapezoidArea(4, 5, 4);