<!-- Footer e require produzem o mesmo resultado, de incluir um codigo php em outro arqujivo -->
<!-- a diferença entre elas é que o require alerta caso não encontre o arquivo e para o script,
o include somente dá um aviso, mas não interrompe o script -->
<?php require 'header.php' ?>

<?php
    echo "Olá pessoal";
?>

<?php include 'footer.php' ?>

<!-- também podem ser usados da seguinte forma: -->
<!-- diferença: para verificar se o arquivo já foi incluído, se já tiver sido não adiciona novamente -->
<?php require_once 'header.php' ?>

<?php
    echo "<hr>Olá pessoal";
?>

<?php include_once 'footer.php' ?>
