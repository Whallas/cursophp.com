<?php
// Arrays
// pode-se especificar os indices manualmente
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
// função para imprimir arrays
print_r($carros);

echo "<br>";
// inserir elemento no final
$carros[] = "Amarok";
$carros[10] = "Camaro";
print_r($carros);

// outra forma
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo "<br>".$motos[5]."<br>";
print_r($motos);

// outra forma
echo "<br>";
$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<br>";

// Count
echo count($carros);
echo "<br>";

// Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
}

// Arrays associativos
echo "<hr>";
$pessoa = array('nome' => 'Rodrigo', 'idade' => 23, 'altura' => 1.75);
$pessoa["cidade"] = "Itabuna";
foreach ($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}

// Arrays multidimensionais
echo "<hr>";
$times = array(
    'paulistas' => array("campeao" => "santos", "vice" => "são paulo", "terceiro" => "palmeiras"), 
    'cariocas'  => array("vasco", "flamengo", "botafogo"), 
    'baianos'   => array("bahia", "vitoria", "itabuna")
);
echo $times["cariocas"][0];
echo "<br>";
foreach ($times["cariocas"] as $key => $value) {
    echo $key.": ".$value."<br>";
}