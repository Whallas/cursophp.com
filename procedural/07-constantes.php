<?php
// Constantes
// automaticamente são globais
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

echo NOME;
echo "<hr>";
var_dump(IDADE);

echo "<hr> Meu nome é ".NOME.", minha idade é ".IDADE." e minha altura é ".ALTURA."<hr>";

define("TIMES", ["vasco", "flamengo", "santos"]);
echo TIMES[0]."<hr>";

function exibeNome() {
    echo NOME;
}
exibeNome();