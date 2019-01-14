<?php
// Manipulação de arquivos
$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste\r\n";
$tamanhoArq = filesize($arquivo);

// escrita
/*$arquivoAberto = fopen($arquivo, 'a');
fwrite($arquivoAberto, $conteudo);*/

// leitura
$arquivoAberto = fopen($arquivo, 'r');
while (!feof($arquivoAberto)) {
    $linha = fgets($arquivoAberto, $tamanhoArq);
    echo $linha."<br>";
}

fclose($arquivoAberto);