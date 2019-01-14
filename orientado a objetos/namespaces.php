<?php
// namespaces servem para resolver o problema de classes de nomes iguais em arquivos/pastas diferentes
require 'classes/produto.php';
require 'models/produto.php';

// utilizando o namespace: \namespace\
$produto1 = new \classes\Produto();
$produto1->mostrarDetalhes();

$produto2 = new \models\Produto();
$produto2->mostrarDetalhes();

// outra forma de usar

/*use classes\Produto;
$produto3 = new Produto();
$produto3->mostrarDetalhes();*/

use models\Produto;
$produto3 = new Produto();
$produto3->mostrarDetalhes();

// ou também

use classes\Produto as productClasses;
$produto4 = new productClasses();
$produto4->mostrarDetalhes();

use models\Produto as productModels;
$produto5 = new productModels();
$produto5->mostrarDetalhes();
