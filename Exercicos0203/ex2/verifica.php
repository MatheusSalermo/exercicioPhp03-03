<?php
$placa = $_POST['txtPlaca'];
$ultimoDigito = substr($placa, -1, 1);

switch($ultimoDigito){
    case 1:
    case 2:
        echo("O rodízio do seu carro de placa $placa é Segunda-Feira");
    break;
    case 3:
    case 4:
        echo("O rodízio do seu carro de placa $placa é Terça-Feira");
    break;
    case 5:
    case 6:
        echo("O rodízio do seu carro de placa $placa é Quarta-Feira");
    break;
    case 7:
    case 8:
        echo("O rodízio do seu carro de placa $placa é Quinta-Feira");
    break;
    case 9:
    case 0:
        echo("O rodízio do seu carro de placa $placa é Sexta-Feira");
    break;
}
?>