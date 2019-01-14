<?php
// exibe seções criadas
session_start();

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();