<?php
// message, code, file, line

class NewsLetter {
    public function cadastrarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // lançar exception
            throw new Exception("Este email é inválido", 1);
        } else {
            echo "Email cadastrado com sucesso!<br>";
        }
    }
}

$newsletter = new NewsLetter();
try {
    $newsletter->cadastrarEmail("whallaspimnmeteil.com");
} catch (Exception $e) {
    echo $e->getMessage()."<br>";
    echo $e->getCode()."<br>";
    echo $e->getFile()."<br>";
    echo $e->getLine()."<br>";
}