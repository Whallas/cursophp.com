<?php
// igualdade, dá positivo
if (10 == "10") {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

// identidade, dá negativo
echo "<br>";
if (10 === "10") {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

// negação de identidade, dá positivo
echo "<br>";
if (10 !== "10") {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

// operador spaceship, faz comparação dupla
echo "<br>";
// lado maior da esquerda, retorna 1
var_dump(20 <=> 10);
echo "<br>";
// lados iguais, retorna 0
var_dump(10 <=> 10);
echo "<br>";
// lado maior da direita, retorna -1
var_dump(10 <=> 20);