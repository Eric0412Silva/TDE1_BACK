<?php

$C = intval(trim(fgets(STDIN)));
$A = intval(trim(fgets(STDIN)));


$viagens = ceil($A / ($C - 1));


echo $viagens . "\n";
?>
