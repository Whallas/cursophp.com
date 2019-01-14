<?php
// Conexão
require_once 'db_connect.php';

// Clear
function clear($input) {
    global $connect;
    // sql
    $var = mysqli_escape_string($connect, $input);
    // xss - ataque de inserir scripts em inputs
    $var = htmlspecialchars($var);

    return $var;
}
?>