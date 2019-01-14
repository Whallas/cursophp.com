<?php
// Referência e clonagem de objetos

class Pessoa {
    public $idade;

    // é chamado em background quando é chamado a palavra-chave clone
    public function __clone() {
        echo "Clonagem de objetos<br>";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

// clonando objeto
$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade."<br>";
echo $pessoa2->idade."<br>";