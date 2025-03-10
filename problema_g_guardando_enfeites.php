<?php

$N = intval(trim(fgets(STDIN)));
$matrix = [];

for ($i = 0; $i < $N; $i++) {
    $matrix[$i] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}

$order = range(1, $N);


usort($order, function($a, $b) use ($matrix) {
    return max($matrix[$b - 1]) <=> max($matrix[$a - 1]);
});


echo implode(" ", $order) . "\n";
?>


// Temos N enfeites e uma matriz NxN, onde cada linha representa um enfeite e cada coluna indica a "confiança" de que esse enfeite estava originalmente naquela posição.

O objetivo é ordenar os enfeites de modo que a multiplicação das confiabilidades seja a máxima possível.