<?php
$a=0;
$b=1;
for ($i= 0; $i< 10; $i++) {
    $c=$a+$b;
    echo "$a";
    echo " ";
    $a=$b;
    $b=$c;
}
?>