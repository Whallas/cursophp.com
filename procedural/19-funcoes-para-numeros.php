<?php
$db = 1234.56;
// formatar numero
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$".$preco;

echo "<hr>";
// arredonda
echo round(3.55);

echo "<hr>";
// arredonda pra cima
echo ceil(9.1);

echo "<hr>";
// arredonda pra baixo
echo floor(9.1);

echo "<hr>";
// gera numero randomico
echo rand(1, 20);