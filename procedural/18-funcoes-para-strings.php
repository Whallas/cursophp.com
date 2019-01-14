<?php
// converte para maiusculo
$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;

// converte para minusculo
$novoNome = strtolower($novoNome);
echo "<br>".$novoNome;

// retorna parte da string
$mensagem = "olá mundo";
echo "<hr>".substr($mensagem, 4, 5);

// complementa uma string com uma quantidade especificada de caracteres
$objeto = "mouse";
$novoObj = str_pad($objeto, 7, "*");
// acrescentar na esquerda
$novoObj = str_pad($novoObj, 10, "*", STR_PAD_LEFT);
echo "<hr>".$novoObj;

// repetir a string n vezes em uma nova
echo "<hr>";
$string = str_repeat("Sucesso", 5);
echo $string;

// tamanho da string
echo "<hr>";
echo strlen($mensagem);

// substituir uma palavra em uma string
echo "<hr>";
$texto = "A seleção argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

// retorna a posição onde termina a substring procurada
echo "<hr>";
echo strpos($texto, "copa");