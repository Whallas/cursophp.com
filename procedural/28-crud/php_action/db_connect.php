<?php
// Conexão com banco de dados
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($severname, $username, $password, $db_name);
// A codificação também precisa ser definida para os campos ao serem inseridos no BD
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) {
    echo "Erro na conexão ".mysqli_connect_error();
} else {
    # code...
}
