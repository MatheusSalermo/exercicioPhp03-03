<?php


$nome = $_POST['txtNome'];
$cpf = $_POST['txtCpf'];
$data = $_POST['txtAno'];
$carta = $_POST['slCategoria'];
$ano = 2019;
$idade = $ano - $data;
$aniversario = isset($_POST['cbAniversario']);
if($aniversario == null){
    
}
else{
$idade++;
}
switch($carta){
    case 1:
        if($idade>18){
            echo("O Sr(a)$nome possui $idade anos, e pode tirar sua carta categoria A");
        }
        else{
            echo("O Sr(a)$nome possui $idade anos, e não pode tirar sua carta categoria A");
        }
    break;
    case 2:
        if($idade>18){
            echo("O Sr(a)$nome possui $idade anos, e pode tirar sua carta categoria B");
         }
        
        else{
            echo("O Sr(a)$nome possui $idade anos, e não pode tirar sua carta categoria B");
        }
    break;
    case 3:
        if($idade>18){
            echo("O Sr(a)$nome possui $idade anos, e pode tirar sua carta categoria C");
        }
        else{
            echo("O Sr(a)$nome possui $idade anos, e não pode tirar sua carta categoria C");
        }
    break;
    case 4:
        if($idade>21){
            echo("O Sr(a)$nome possui $idade anos, e pode tirar sua carta categoria D");
        }
        else{
            echo("O Sr(a)$nome possui $idade anos, e não pode tirar sua carta categoria D");
        }
    break;
    case 5:
        if($idade>21){
            echo("O Sr(a)$nome possui $idade anos, e pode tirar sua carta categoria E");
        }
        else{
            echo("O Sr(a)$nome possui $idade anos, e não pode tirar sua carta categoria E");
        }
     break;
        }

?>