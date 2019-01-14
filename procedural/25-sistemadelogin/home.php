<?php
    // Conexão
    require_once "db_connect.php";
    // Seção
    session_start();

    // Verificação, sem seção não se pode entrar na página restrita
    if (!isset($_SESSION['logado'])) {
        header('Location: index.php');
    }

    // Dados
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Restrita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Olá <?php echo $dados['nome']; ?></h1>
    <a href="logout.php">Sair</a>
</body>
</html>