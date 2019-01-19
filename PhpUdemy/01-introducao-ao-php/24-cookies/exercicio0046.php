<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cookies</title>
	</head>
	<body>
		<form action="" method="GET">
			<label for="valor">ID:</label>
			<input type="text" name="valor" id="valor" placeholder="Valor do cookie">
			<button type="submit">Verificar</button>
		</form>

		<?php
			
			if (isset($_GET['valor'])) {
				$valorCookie = $_GET['valor'];
				// desisti

				if(isset($_COOKIE["id_produto"])){
					echo "Cookie com o ID do produto: ".$_COOKIE["id_produto"] . "<br>";
				}else{
					setcookie("id_produto", "5687", (time() + (180 * 24 * 3600)));
					echo "Criado o cookie<br>";
				}
			}
			
		?>
	</body>
</html>


