<?php

$racao_kg = $_POST ['racao_kg'];
$racao_dia = $_POST ['racao_dia'];
$qntd_gatos = 3;

function calculo_diario_gatos ($racao_dia,$qntd_gatos){

return $racao_dia * $qntd_gatos;

}

$multiplica = ($racao_dia*$qntd_gatos) /1000;
echo "A quantidade diária de ração para os três gatos juntos é $multiplica kg." . "<br>";

$racao_uma_semana = $multiplica * 7;
echo "A quantidade de ração que os 3 gatos comem em 7 dias é $racao_uma_semana kg." . "<br>";

$sobra = $racao_kg - $racao_uma_semana;
echo "Sobrará no saco $sobra kg de ração." . "<br>";

?>