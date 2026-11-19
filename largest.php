<?php
$a = 25;
$b = 40;
$c = 15;

if ($a > $b) {
    if ($a > $c) {
        echo "$a is the largest";
    } else {
        echo "$c is the largest";
    }
} else {
    if ($b > $c) {
        echo "$b is the largest";
    } else {
        echo "$c is the largest";
    }
}
?>