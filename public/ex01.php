<?php

$notas = [10, 20, 30 , 10];
$qnt = count($notas);
$valor = array_sum($notas);

$media = $valor / $qnt;

echo "A soma das notas é: " . $valor . "<br>";
echo "A média do aluno é: " . $media;

?>