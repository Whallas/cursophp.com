<?php
// seções são usadas para gerar informações que podem ser utilizadas em várias páginas
// as seções duram enquanto o navegador não for fechado
// deve-se sempre iniciar a seção no código
session_start();
// criando seções
$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();