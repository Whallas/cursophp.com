<?php
// escopo global
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 3;
$c = 7;

function exibeNome() {
    // escopo local
    // echo $nome;
    // para resolver, pucha a referencia para a global:
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";

function exibeCidade() {
    // inicia a variável em escopo global
    global $cidade;
    $cidade = "rio de janeiro";
}
exibeCidade();
echo $cidade;

// ////////////////////////////////////////////////
echo "<hr>";
function soma() {
    // nao funciona
    // echo $a + $b + $c;
    // array associativo, onde o nome da variavel vai ser a chave do indice
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();