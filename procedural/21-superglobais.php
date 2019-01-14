<?php
// Superglobais, variáveis pré-definidas do php
/*
    $GLOBALS - armazena variáveis globais em um array
    $_SERVER - array com informações sobre locais, caminhos, locais de scripts
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

// ------------------ $_SERVER ------------------
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";