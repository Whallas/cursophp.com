<?php
// Expressões regulares
/* o pattern se escreve entre as / /
 * ^: indica o início da expressão
 * $: indica o fim da expressão
 * /i: ignorar case sensitive
*/

// $string = "conteudo@gmail.com";
// $padrao = "/^[a-z0-9]+$/i";
// $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/";

$string = "13/09/2018";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if (preg_match($padrao, $string)) {
    echo "Válido<hr>";
    echo $string;
} else {
    echo "Inválido";
    echo "<hr>";
}