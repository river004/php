<?php
for ($a = 1; $a <= 5; $a++) {
    echo $a * 2 . '<br />';
}
$b = 0;
while ($b < 20) {
    $b +=1;
    echo $b;
}
echo "<br/>";
$count = 0;
while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0 ) {
        $count++;
        continue;
    }
    echo $count . "<br/>";
    $count++;
}
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br />";
}
$num = 0;

do {
    echo "num=".$num;
    echo "<br/>";
    $num += 1;
}while ($num < 3);
echo "<br/>";

for ($a = 1; $a <=50; $a++) {
    if ($a % 3 == 0 and $a % 5 == 0)
        echo "Fizzbuzz";
    else if ($a % 3 == 0)
        echo "Fizz";
    else if ($a % 5 == 0)
        echo "Buzz";
    else
    echo $a;
    echo "<br/>";
}
for ($a = 1;)
