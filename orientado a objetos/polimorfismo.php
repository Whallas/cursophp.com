<?php

class Animal {
    public function andar() {
        echo "O animal andou<br>";
    }

    public function correr() {
        echo "O animal correu<br>";
    }
}

class Cavalo extends Animal {
    public function andar() {
        $this->correr();
    }
}

$animal = new cavalo();
$animal->andar();