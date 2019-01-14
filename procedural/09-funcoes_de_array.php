<?php
/*
 * is_array($array) = verificar se uma determinada variável é um array
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
 * array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
 * array_pop($array) = exclui a última posição do array
 * array_shift($array) = exclui a primeira posição do array
 * array_unshift($arr, "valor") = adiciona um ou mais elementos no início do array
 * array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
 * array_combine($keys, $values) = mescla os dois arrays passados
 * array_sum() = calcula a soma dos elementos de um array
 * explode("/", "20/01/2001") = transforma string em array
 * inplode("-", $arr) = transforma array em string
*/

$nomes = array("primo" => "Rodrigo", "visinho" => "Felipe", "mae" => "Maria", "pai" => "José");
if (is_array($nomes)) {
    echo "É um array<br>";
} else {
    echo "Não é um array<br>";
}

echo "<br>";
echo in_array("Felipe", $nomes);

echo "<hr>";
$keys = array_keys($nomes);
print_r($keys);

echo "<hr>";
$values = array_values($nomes);
print_r($values);

echo "<hr>";
$carros = array('Camaro', "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo "<hr>";
echo array_pop($carros);
echo "<br>";
print_r($carros);

echo "<hr>";
echo array_shift($motos);
echo "<br>";
print_r($motos);

echo "<hr>";
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola");
echo "<br>";
print_r($frutas);

echo "<hr>";
print_r($carros);
array_push($carros, "Manga", "Acerola");
echo "<br>";
print_r($carros);

echo "<hr>";
$keys = array("Campeão", "Vice", "Terceiro");
print_r($keys);
echo "<br>";
$values = array("Vasco", "Flamengo", "Botafogo");
print_r($values);
echo "<br>";
$times = array_combine($keys, $values);
print_r($times);

echo "<hr>";
$soma = array(5, 6, 10, 8);
echo array_sum($soma);

echo "<hr>";
$data = "30/02/2018";
$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";
$frase = "meu nome não é johnny";
print_r(explode(' ', $frase));

echo "<hr>";
$string = implode(', ', $nomes);
echo $string;