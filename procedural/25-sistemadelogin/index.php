<?php
    // Conexão
    require_once "db_connect.php";

    // Seção
    session_start();

    // Botão enviar
    if (isset($_POST['btn-entrar'])) {
        $erros = array();

        // filtra os parametros usando funções de mysql
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if (empty($login) or empty($senha)) {
            $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
        }
        else {
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            // faz a consulta
            $resultado = mysqli_query($connect, $sql);

            // verifica se retornou algo
            if (mysqli_num_rows($resultado) > 0) {
                
                $senha = md5($senha); // criptografar a senha
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) == 1) {

                    // converte resultado da consulta em array
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);

                    // cria seção para gravar que o usuário está logado
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];

                    // redireciona para outra página
                    header('Location: home.php');
                } 
                else {
                    $erros[] = "<li> Usuário e senha não conferem </li>";
                }
            }
            else {
                $erros[] = "<li> Usuário inexistente </li>";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Login</h1>

    <?php
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo $erro;
            }
        }
    ?>

    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id="login"><br>
        
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha"><br><br>

        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>