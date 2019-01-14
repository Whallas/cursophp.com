<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function sacar($s);
    abstract protected function depositar($s);
}

class Itau extends Banco {
    public function sacar($s) {
        $this->saldo -= $s;
        echo "Sacou $s<br>";
    }

    public function depositar($s) {
        $this->saldo += $s;
        echo "Depositou $s<br>";
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "Saldo: ".$itau->getSaldo()."<br>";
$itau->sacar(250);
echo "Saldo: ".$itau->getSaldo()."<br>";
$itau->depositar(900);
echo "Saldo: ".$itau->getSaldo()."<br>";