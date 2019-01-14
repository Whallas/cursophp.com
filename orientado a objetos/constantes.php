<?php

class Pessoa {
    // constante
    const nome = "Rodrigo";

    public function exibirNome() {
        // self:: referencia a constante dentro do escopo da classe
        echo self::nome."<br>";
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();

class Rodrigo extends Pessoa {
    const nome = "Oliveira";

    public function exibirNome() {
        // parent:: referencia a constante dentro do escopo da superclasse
        echo parent::nome."<br>";
    }
}

$rodrigo = new Rodrigo();   
$rodrigo->exibirNome();