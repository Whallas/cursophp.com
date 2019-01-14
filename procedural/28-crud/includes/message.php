<?php
// seção
session_start();

if (isset($_SESSION['mensagem'])) { ?>
	<script>
		// executado quando toda a página está carregada
		window.onload = function () {
			M.toast({ html: '<?php echo $_SESSION['mensagem']; ?>' });
		}	
	</script>
<?php
}
session_unset();
?>