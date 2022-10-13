<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="./style/styleForm.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

</head>
<body>
    <form method="POST" action="../Controllers/CadastroPub.php">
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Criar Publicação</h2>
				<input type="text" class="field" placeholder="Título" name="tit_projeto">
                <label for="">Data de Início</label>
				<input type="date" class="field" placeholder="Data de Início"name="dti_projeto">
                <label for="">Data Final</label>
				<input type="date" class="field" placeholder="Data de Termino" name="dtt_projeto">

				<textarea style="resize: none" placeholder="Mensagem" class="field" name="res_projeto"></textarea>
				<a href="./Home.php"><input type="submit" class="buttonForm" value="Criar publicação"> </a>
				<br><br>
				<a href="./Home.php"><input type="button"class="buttonForm2" value="Voltar"></a>
			</div>
		</div>
	</div>
    </form>
</body>
</html>
