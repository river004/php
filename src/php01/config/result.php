<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、" . $name . "<br/>";
$btn = htmlspecialchars($_POST['btn'], ENT_QUOTES);
print "ご希望の商品は、" . $btn . "<br/>";
$pieces = htmlspecialchars($_POST['pieces'], ENT_QUOTES);
print "注文数は、" . $pieces;
