<html>
<body>
    <?php
    /* Validações
       Funções (filter_input - filter_var)
       FILTER_VALIDATE_INT
       FILTER_VALIDATE_EMAIL
       FILTER_VALIDATE_FLOAT
       FILTER_VALIDATE_IP
       FILTER_VALIDATE_URL
    */
    /* Sanitização, filtros de limpeza
       Funções (filter_input - filter_var)
       FILTER_SANITIZE_SPECIAL_CHARS - sana código html
       FILTER_SANITIZE_NUMBER_INT - filtra somente números do campo
       FILTER_SANITIZE_EMAL - limpa texto e pega somente o email
       FILTER_SANITIZE_URL
    */
    ?>
    
    <?php
    if (isset($_POST['enviar-formulario'])) {
        $erros = array();
        // Validações
        // valida se o parametro é um input inteiro
        /*if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro";
        }
        // valida se o parametro é um input de email
        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido";
        }

        // valida se o parametro é um input de float
        if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "peso inválido";
        }

        // valida se o parametro é um input de IP
        if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
            $erros[] = "IP inválido";
        }

        // valida se o parametro é um input de url
        if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválido";
        }*/

        // Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        // valida com a variável e não com o $_POST[]
        // pode ser usado depois de um FILTER_SANITIZE
        if (!filter_var($idade, FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser inteiro";
        }

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "email inválido";
        }

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $erros[] = "url inválido";
        }


        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo "<li> $erro </li>";
            }
        } else {
            echo "Parabéns, seus dados estão corretos!";
        }
    }
    ?>
    
    <!-- executa o proprio arquivo: -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br>

        <!-- <label for="ip">IP:</label>
        <input type="text" name="ip" id="ip">
        <br> -->

        <label for="url">URL:</label>
        <input type="text" name="url" id="url">
        <br>

        <button type="submit" name="enviar-formulario">Enviar</button>
        <br>
    </form>

    <!-- <a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a> -->
</body>
</html>