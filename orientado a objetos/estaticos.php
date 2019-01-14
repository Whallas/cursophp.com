<?php

class Login {
    public static $user;
    const a = 1;

    public static function verificaLogin() {
        // self para referenciar uma variavel estatica dentro da classe
        echo "O usuário ".self::$user." está logado!<br>";
    }

    public function sairSistema() {
        echo "O usuário deslogou<br>";
    }
}

Login::$user = "admin";
Login::verificaLogin();

$login = new Login();
$login->sairSistema();
echo $login::a."<br>";