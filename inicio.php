<?php
echo "<h1>Olá mundo</h1>";
echo date("d/m/Y");
echo "<br> <br>";
$nome = "João";
$sexo = 'M';
$idade = 25;
$salario = 1255.00;
echo $nome, " tem ", $idade, " anos e ganha ", $salario, " reais";
echo "<br> <br>";
if ($idade >= 18){
    echo $nome, " é maior de idade";
}else {
    echo $nome, " é menor de idade";
}