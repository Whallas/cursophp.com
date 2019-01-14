<?php

class Pessoa {
    public $nome;
    public $idade;

    public function falar() {
        echo $this->nome." de ".$this->idade." anos acabou de falar<br>";
    }
}

/*$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 25;
// echo "<br>".$rodrigo->nome;
echo $rodrigo->falar();*/

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function logar() {
        if ($this->email == "teste@teste.com" and $this->senha == "123456") {
            echo "Logado com sucesso<br>";
        } else {
            echo "Dados inválidos<br>";
        }
    }
}

$logar = new Login("teste()//@teste.com", "123456", "whallas");
// $logar->setEmail("teste()@teste.com");
// $logar->setSenha("123456");
$logar->logar();
echo $logar->getNome()."<br>";