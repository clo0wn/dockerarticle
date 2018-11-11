<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/bulma.min.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<style>
		.button {
		display: inline-block;
		margin-bottom: 1em;
	
	}
	</style>
</head>

<body>
	<section class="hero is-success is-fullheight">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="column is-4 is-offset-4">
					<h3 class="title has-text-grey">Painel de Cadastro</h3>
					<?php
					if(isset($_SESSION['nao_autenticado'])):
					?>
					<div class="notification is-danger">
					  <p>ERRO: Usuário ou senha inválidos.</p>
					</div>
					<?php
					endif;
					unset($_SESSION['nao_autenticado']);
					?>
					<div class="box">
						<form action="cadastro-exec.php" method="POST">
							<div class="field">
								<div class="control">
									<input required name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
								</div>
							</div>

							<div class="field">
								<div class="control">
									<input required name="senha" class="input is-large" type="password" placeholder="Sua senha">
								</div>
							</div>
							<button type="submit" class="button is-block is-success is-link is-large is-fullwidth">Cadastrar Usuário</button>
							<button type="button" onclick="location.href='login.php'" class="button is-block is-danger is-outlined is-link is-large is-fullwidth">Voltar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
