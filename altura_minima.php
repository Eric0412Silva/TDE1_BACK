<?php

list($N, $H) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$alturas = array_map('intval', explode(" ", trim(fgets(STDIN))));

$contagem = 0;
foreach ($alturas as $altura) {
    if ($H >= $altura) {
        $contagem++;
    }
}

echo $contagem . "\n";
?>
