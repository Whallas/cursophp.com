<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cookies</title>
	</head>
	<body>
		<?php
			
			if(isset($_COOKIE["chave"])){
				echo "Cookie com o chave do usuário: ".$_COOKIE["chave"] . "<br>";
			}else{
				setcookie("chave", "5tgrs8g7", (time() + (2 * 3600)));
				echo "Criado do cookies<br>";
			}
			
		?>
	</body>
</html>


