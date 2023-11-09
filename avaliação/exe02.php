<?php

$largura = $_POST ['largura'];
$altura = $_POST ['altura'];
$comprimento = $_POST ['comprimento'];

function calcularVolume($largura, $altura, $comprimento) {

    $volume = $largura * $altura * $comprimento;

    return $volume;
}

$volume = ($largura * $altura * $comprimento);
echo "O tamanho total de cada caixinha é de $volume cm³"
?>