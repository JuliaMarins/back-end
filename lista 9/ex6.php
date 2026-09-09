<?php

$playlist = [
    "-Cuida do pet <br>",
    "-Jet sky <br>",
    "-pião todo tatuado <br>",
    "-nocaute <br>",
    "-Sereia <br>",
    "-Chuva de arroz <br>"
];

foreach ($playlist as $musica) {
    echo $musica,
    "<br>";
}

echo "Quantidade de músicas: " . count($playlist);

?>