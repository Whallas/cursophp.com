<?php include_once 'includes/header.php'; ?>

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light">Novo Cliente</h3>

		<form action="php_action/create.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" class="btn" name="btn-cadastrar">Cadastrar</button>
            <a href="index.php" type="submit" class="btn green">Lista de clientes</a>
        </form>
	</div>
</div>

<?php include_once 'includes/footer.php'; ?>