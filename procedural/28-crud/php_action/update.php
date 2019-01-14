<?php
// Seção
session_start();
// Conexão
require_once 'db_connect.php';
// Função Clear
require_once 'clear.php';

if (isset($_POST['btn-editar'])) {
    $nome       = clear($_POST['nome']);
    $sobrenome  = clear($_POST['sobrenome']);
    $email      = clear($_POST['email']);
    $idade      = clear($_POST['idade']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade'
        WHERE id = '$id'";
    
    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../index.php');
    }
}