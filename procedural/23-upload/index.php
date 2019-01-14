<html>
<body>
    <?php
        if (isset($_POST['enviar-formulario'])) {
            $formatosPermitidos = array("png", "jpeg", "jpg");
            $quantidadeArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;

            while ($contador < $quantidadeArquivos) {
                // pega extensão do arquivo
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
                // echo var_dump($_FILES['arquivo']);

                if (in_array($extensao, $formatosPermitidos)) {
                    $pasta = "arquivos/";
                    // nome temporário
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";

                    // move arquivo e retorna estado
                    if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                        echo "Upload feito com sucesso! para $pasta$novoNome<br>";
                    } else {
                        echo "Erro ao enviar o arquivo $temporario";
                    }
                } else {
                    echo "Extensão não é permitida <br>";
                }
                $contador++;
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br><br>
        <input type="button" value="nada">
        <input type="submit" name="enviar-formulario">
    </form>
</body>
</html>