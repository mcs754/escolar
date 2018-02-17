<?php
include 'vendor\autoload.php';

$p1 = new Vendas\Produto();
$p1->setNome("sabão em pó");
$p1->setValor(5.00);
$p1->setQuantidade(10);

echo "Existem ", $p1->getQuantidade(), " unidades de ", $p1->getNome(), " no meu estoque. Cada ", $p1->getNome(), " custa R$", $p1->getValor(), ",00 a unidade.";

$v1 = new Vendas\Venda();
$v1->setId(2);