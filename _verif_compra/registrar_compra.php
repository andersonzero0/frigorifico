<?php
include '../functions/functions.php';

$produto = $_POST['produto'];
$valor = $_POST['valor'];
$tempo = time();

if(empty($produto) || empty($valor)) {
    header('location: ../comprar.php');
}else{
    $date = date("d/m/Y", $tempo);
    $registro = "$produto|$valor|$date|";
    escreverData('vendas.txt', $registro);
    header('location: ../comprar.php');
}
?>