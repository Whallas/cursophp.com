<?php
// utilizando os métodos GET e POST através das variáveis superglobais

/* Usando POST:
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome e seu e-mail é $email."."<br>";
var_dump($_POST);
*/

// Usando GET
$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome e seu e-mail é $email."."<br>";
var_dump($_GET);

// echo "<br>".$_GET['idade']."<br>".$_GET['sobrenome'];
