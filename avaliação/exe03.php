<?php
$base = $_POST ['base'];
$expoente = $_POST ['expoente'];

function calcular ($base, $expoente) {
    
$resultado = $base ** $expoente;
 
return $resultado;
}
$resultado = $base ** $expoente;
echo "O resultado da exponenciação é $resultado."

?>