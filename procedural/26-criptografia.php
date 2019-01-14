<?php
$senha = "123456";

// base64 - de mão dupla, ou seja, pode-se criptografar e descriptografar
$novaSenha = base64_encode($senha);
echo "base64: ".$novaSenha."<br>";
echo "Sua senha é: ". base64_decode($novaSenha);

// md5, de mão única, ou seja, não é possível descriptografar
echo "<hr>";
echo "Md5: ".md5($senha)."<br>"; // md5 - 32 bits
// sempre gravar nesses casos as senhas criptografadas

// sha1 - também de mão única
echo "<hr>";
echo "Sha1: ".sha1($senha)."<br>"; 

// senha segura com password hash
$senha = "123456";
$options = [
    // custo - quanto mais custo mais seguro, porém mais recursos de hardware
    // valor padrão: 10
    'cost' => 10
    // se for usar o valor 10, não é necessário criar o parâmetro options
];
// gera a senha, passa a senha e o algoritmo
// algoritmo padrão é o bcrypt
// $options - parâmetro opcional
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo "<hr>";
echo $senhaSegura;

// fazendo a verificação
if (password_verify($senha, $senhaSegura)) {
    echo "<br>senha válida<br>";
} else {
    echo "<br>senha inválida<br>";
}