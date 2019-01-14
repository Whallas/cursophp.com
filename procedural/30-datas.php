<?php
// Datas
// seta a timezone
date_default_timezone_set('America/Sao_Paulo');

// dia do mês em número
echo date('d')."<br>";
// dia da semana - três digitos
echo date('D')."<br>";
// dia da semana extenso e completo
echo date('l')."<br>";

echo "<hr>";

// mês em digitos
echo date('m')."<br>";
// mês extenso em 3 caracteres
echo date('M')."<br>";

echo "<hr>";

// ano em dois numeros
echo date('y')."<br>";
// ano completo
echo date('Y')."<br>";

echo "<hr>";

// formato de data padrão
echo date('d/m/Y')."<br>";

echo "<hr>";

// hora no formato de 12 horas
echo date('d/m/Y h')."<br>";
// hora no formato de 24 horas
echo date('d/m/Y H')."<br>";

echo "<hr>";

// dia/mês/ano hora/minuto/segundo
echo date('d/m/Y H:i:s')."<br>";
// AM/PM
echo date('d/m/Y H:i:s A')."<br>";

echo "<hr>";

// para armazenar no banco de dados
$date = date('Y-m-d'); // formato DATE
echo $date."<br>";
$datetime = date('Y-i-d H:i:s'); // formato DATETIME
echo $datetime."<br>";

echo "<hr>";

// função TIME - total de segundos de 1970 até agora
$time = time();
echo $time."<br>";
// formatar TIME
echo date('d/m/Y', $time);

echo "<hr>";

// função MKTIME - hora, minuto, segundo, mês, dia, ano
$data_pagamento = mktime(15, 30, 00, 01, 15, 2019);
echo date('d/m/y - h:i', $data_pagamento)."<br>";

echo "<hr>";

// função STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);
echo date('d/m/Y', $data);