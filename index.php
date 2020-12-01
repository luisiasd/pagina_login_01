<?php

include("conexao.php");

if(isset($_POST['login']) && strlen($_POST['login']) > 0){
				if(isset($_SESSION))
				session_start();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
				<meta charset="utf-8">
				<title>Login</title>
				<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>
<body>
				<section>
								<div class="container">
												<form method="POST" action="">
																<img src="">
																<h1>IdeaLamp</h1>
								
																<div class="estiloLogin">
																				<input value="" name="login" type="text" placeholder="ID">
																</div>
								
																<div class="estiloLogin">
																				<input name="senha" type="password" placeholder="Senha">
																</div>
								
																<div id="esqueceuSenha"><a href="">Esqueceu?</a></div>
												
																<input name="btnEnviar" type="submit" value="Pronto!!">
																<div id="cadastrar">Crie conta gratuita! <a href="">Cadastre-se</a></div>
												</form>
								</div>
				</section>
</body>
</html>
