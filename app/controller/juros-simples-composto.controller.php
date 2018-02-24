<?php
$capital = filter_input(INPUT_POST,'capital');
$taxa = filter_input(INPUT_POST,'taxa');
$tempo = filter_input(INPUT_POST,'tempo');
$tipoDeTempo = filter_input(INPUT_POST,'mesAno');


//Converte anos para meses
if($tipoDeTempo == 'ano')
  $tempo = $tempo*12;

// converte juros
$taxa = $taxa/100;

require_once '../modal/calculadora.class.php';
$calculadora = new calculadora();
$res = $calculadora->juros_simples($capital,$taxa,$tempo);

var_dump($res);
 ?>
