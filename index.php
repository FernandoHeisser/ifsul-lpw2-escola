<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="UTF-8"/>
	<style type="text/css">
		body{
			font-family: arial;
		}
		#bloco2{
			margin-right: 100px;
			float: left;
			width: 100px;	
		}
		#bloco3{
			margin-right: 100px;
			float: left;
			width: 100px;
		}
		#bloco4{
			margin-right: 100px;
			float: left;
			width: 100px;
		}
		#bloco5{
			margin-right: 100px;
			float: left;
			width: 100px;
		}
		#bloco6{
			float: left;
			width: 100px;
		}
		#bloco7{
			margin-top: 50px;
			clear: left;
			float: left;
			width: 100px;
		}
	</style>
</head>
<body>
	<div id="bloco2">
		<form method="post" name="form2" action="controle.php">
			<fieldset><legend>Cadastrar Aluno</legend>

				<label for="nome1">Nome:</label><br>
				<input name="nome1" type="text"><br><br>

				<label for="email1">Email:</label><br>
				<input name="email1" type="email"><br><br>

				<label for="cpf1">CPF:</label><br>
				<input name="cpf1" type="number"><br><br>

				<label for="endereco1">Endereço:</label><br>
				<input name="endereco1" type="text"><br><br>

				<label for="numero1">Número:</label><br>
				<input name="numero1" type="number"><br><br>

				<label for="cidade1">Cidade:</label><br>
				<input name="cidade1" type="text"><br><br>

				<label for="estado1">Estado:</label><br>
				<input name="estado1" type="text"><br><br>
				
				<input type="submit" name="cadastrar_aluno" value="Cadastrar">
			</fieldset>
		</form>
		<?php if(isset($_COOKIE['mensagem1'])) echo $_COOKIE['mensagem1']; ?>
	</div>
	<div id="bloco3">
		<form method="post" name="form3" action="controle.php">
			<fieldset><legend>Cadastrar Professor</legend>
				
				<label for="nome2">Nome:</label><br>
				<input name="nome2" type="text"><br><br>

				<label for="email2">Email:</label><br>
				<input name="email2" type="email"><br><br>

				<label for="cpf2">CPF:</label><br>
				<input name="cpf2" type="number"><br><br>

				<label for="endereco2">Endereço:</label><br>
				<input name="endereco2" type="text"><br><br>

				<label for="numero2">Número:</label><br>
				<input name="numero2" type="number"><br><br>

				<label for="complemento2">Complemento:</label><br>
				<input name="complemento2" type="text"><br><br>

				<label for="cidade2">Cidade:</label><br>
				<input name="cidade2" type="text"><br><br>

				<label for="estado2">Estado:</label><br>
				<input name="estado2" type="text"><br><br>
				
				<input type="submit" name="cadastrar_professor" value="Cadastrar">
			</fieldset>
		</form>
		<?php if(isset($_COOKIE['mensagem2'])) echo $_COOKIE['mensagem2']; ?>
	</div>
	<div id="bloco4">
		<form method="post" name="form4" action="controle.php">
			<fieldset><legend>Consultar Professor</legend>
				
				<label for="nome_professor">Nome do Professor:</label><br>
				<input name="nome_professor" type="text"><br><br>

				<input type="submit" name="consultar_professor" value="Consultar">
			</fieldset>
		</form>
	</div>
	<div id="bloco5">
		<form method="post" name="form5" action="controle.php">
			<fieldset><legend>Consultar Aluno</legend>
				
				<label for="nome_aluno">Nome do Aluno:</label><br>
				<input name="nome_aluno" type="text"><br><br>

				<input type="submit" name="consultar_aluno" value="Consultar">
			</fieldset>
		</form>
	</div>
	<div id="bloco6">
		<form method="post" name="form6" action="controle.php">
			<fieldset><legend>Consultar Cidade</legend>
				
				<label for="nome_cidade">Nome da Cidade:</label><br>
				<input name="nome_cidade" type="text"><br><br>

				<input type="submit" name="consultar_cidade" value="Consultar">
			</fieldset>
		</form>
	</div>
	<div id="bloco7">
		<form method="post" name="form7" action="controle.php">
				<input type="submit" name="consultar_todos_professores" value="Consultar Todos Professores">
		</form>
		<form method="post" name="form7" action="controle.php">
				<input type="submit" name="consultar_todos_alunos" value="Consultar Todos Alunos">
		</form>
	</div>
</body>
</html>
