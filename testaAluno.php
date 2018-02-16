<?php
include "Aluno.php";
include "Professor.php";
$aluno1 = new Aluno();
$aluno1->setNome("Marcos Fernandes");
$aluno1->setIdade(29);
$aluno1->setSalario(3000.00);

echo $aluno1->getNome();
echo "<br>";
echo $aluno1->getIdade();
echo "<br>";
echo $aluno1->getSalario();
echo "<br>";
$p1 = new Professor("Juliano", 5000.00);
echo $p1->getNome(), " ganha ", "R$", $p1->getSalario(),",00" , " de salário mensal.";
