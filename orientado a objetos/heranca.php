<?php

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() { echo "Andou<br>"; }

    public function parar() { echo "Parou<br>"; }
}

class Carro extends Veiculo {
    public function ligarLimpador() { echo "limpando em 3 2 1<br>"; }
}

class Moto extends Veiculo {
    public function darGrau() { echo "Dando grau em 3 2 1"; }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = "2000";
echo $carro->andar();
echo $carro->ligarLimpador();

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = "2010";
echo $moto->parar();
echo $moto->darGrau();