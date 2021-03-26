<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
	<style type="text/css">
		body{
			font-family: arial;
		}
		#block1{
			width: 25%;
		}
		#block2{
			width: 25%;
		}
		input{
			width: 100%;
		}
		table, th, td{
			border-collapse: collapse;
			border: black 1px solid;
			padding: 10px;
		}
	</style>
</head>
<body>
	<?php
	function conectaBanco(){
		$servidor="localhost";
		$usuario="root";
		$senha="";
		$banco="escola";

		$connection=mysqli_connect($servidor, $usuario, $senha);
		$sla=mysqli_select_db($connection, $banco);
		return $connection;
	}
	function cadastraAluno($nome, $email, $CPF, $endereco, $numero, $cidade, $estado){
		$connection=conectaBanco();
		$insere="INSERT INTO aluno(nome, email, CPF, endereco, numero, cidade, estado) VALUES('$nome', '$email', '$CPF', '$endereco', '$numero', '$cidade', '$estado');";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		setcookie('mensagem1', 'Aluno Cadastrado com Sucesso!', time()+1);
		mysqli_close($connection);
		header("Location:index.php");
	}
	function cadastraProfessor($nome, $email, $CPF, $endereco, $numero, $complemento, $cidade, $estado){
		$connection=conectaBanco();
		$insere="INSERT INTO professor(nome, email, CPF, endereco, numero, complemento, cidade, estado) VALUES('$nome', '$email', '$CPF', '$endereco', '$numero', '$complemento', '$cidade', '$estado');";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		setcookie('mensagem2', 'Professor Cadastrado com Sucesso!', time()+1);
		mysqli_close($connection);
		header("Location:index.php");
	}
	function consultarProfessor($nome){
		$connection=conectaBanco();
		$insere="SELECT * FROM professor WHERE nome like '%$nome%'";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		echo "<table><tr><th>Nome</th><th>E-mail</th><th>CPF</th><th>Endereço</th><th>Número</th><th>Complemento</th><th>Cidade</th><th>Estado</th></tr>";
		while($row = mysqli_fetch_array($ins)){
			$cod=$row['id_professor'];
			echo "<tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row['CPF']."</td><td>".$row['endereco']."</td><td>".$row['numero']."</td><td>".$row['complemento']."</td><td>".$row['cidade']."</td><td>".$row['estado']."</td><td>".
			"<a href=\"controle.php?id=$cod&editar&professor\">Editar</a>"."</td><td>".
			"<a href=\"controle.php?id=$cod&excluir&professor\">Excluir</a>"."</td></tr>";
		}
		echo "</table>";
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function consultarAluno($nome){
		$connection=conectaBanco();
		$insere="SELECT * FROM aluno WHERE nome like '%$nome%'";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		echo "<table><tr><th>Nome</th><th>E-mail</th><th>CPF</th><th>Endereço</th><th>Número</th><th>Cidade</th><th>Estado</th></tr>";
		while($row = mysqli_fetch_array($ins)){
			$cod=$row['id_aluno'];
			echo "<tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row['CPF']."</td><td>".$row['endereco']."</td><td>".$row['numero']."</td><td>".$row['cidade']."</td><td>".$row['estado']."</td><td>".
			"<a href=\"controle.php?id=$cod&editar&aluno\">Editar</a>"."</td><td>".
			"<a href=\"controle.php?id=$cod&excluir&aluno\">Excluir</a>"."</td></tr>";
		}
		echo "</table>";
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function consultarCidade($nome){
		$connection=conectaBanco();
		$insere="SELECT * FROM aluno WHERE cidade like '%$nome%'";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		echo "<table><tr><th>Nome</th><th>E-mail</th><th>CPF</th><th>Endereço</th><th>Número</th><th>Cidade</th><th>Estado</th></tr>";
		while($row = mysqli_fetch_array($ins)){
			$cod=$row['id_aluno'];
			echo "<tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row['CPF']."</td><td>".$row['endereco']."</td><td>".$row['numero']."</td><td>".$row['cidade']."</td><td>".$row['estado']."</td><td>".
			"<a href=\"controle.php?id=$cod&editar&aluno\">Editar</a>"."</td><td>".
			"<a href=\"controle.php?id=$cod&excluir&aluno\">Excluir</a>"."</td></tr>";
		}
		echo "</table>";
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function consultarTodosProfessores(){
		$connection=conectaBanco();
		$insere="SELECT * FROM professor";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		echo "<table><tr><th>Nome</th><th>E-mail</th><th>CPF</th><th>Endereço</th><th>Número</th><th>Complemento</th><th>Cidade</th><th>Estado</th></tr>";
		while($row = mysqli_fetch_array($ins)){
			$cod=$row['id_professor'];
			echo "<tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row['CPF']."</td><td>".$row['endereco']."</td><td>".$row['numero']."</td><td>".$row['complemento']."</td><td>".$row['cidade']."</td><td>".$row['estado']."</td><td>".
			"<a href=\"controle.php?id=$cod&editar&professor\">Editar</a>"."</td><td>".
			"<a href=\"controle.php?id=$cod&excluir&professor\">Excluir</a>"."</td></tr>";
		}
		echo "</table>";
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function consultarTodosAlunos(){
		$connection=conectaBanco();
		$insere="SELECT * FROM aluno";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		echo "<table><tr><th>Nome</th><th>E-mail</th><th>CPF</th><th>Endereço</th><th>Número</th><th>Cidade</th><th>Estado</th></tr>";
		while($row = mysqli_fetch_array($ins)){
			$cod=$row['id_aluno'];
			echo "<tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row['CPF']."</td><td>".$row['endereco']."</td><td>".$row['numero']."</td><td>".$row['cidade']."</td><td>".$row['estado']."</td><td>".
			"<a href=\"controle.php?id=$cod&editar&aluno\">Editar</a>"."</td><td>".
			"<a href=\"controle.php?id=$cod&excluir&aluno\">Excluir</a>"."</td></tr>";
		}
		echo "</table>";
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function excluirAluno($id){
		$connection=conectaBanco();
		$insere="DELETE FROM aluno WHERE id_aluno=$id";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		echo "Excluido com Sucesso";
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function excluirProfessor($id){
		$connection=conectaBanco();
		$insere="DELETE FROM professor WHERE id_professor=$id";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		echo "Excluido com Sucesso";
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function geraFormularioAluno($id){
		$connection=conectaBanco();
		$insere="SELECT * FROM aluno WHERE id_aluno=$id";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		
		while($row = mysqli_fetch_array($ins)){
			echo "<div id='block1'><br><br><form method='post' name='formA' action='controle.php'>
				<fieldset><legend>Editar Aluno</legend>

					<label for='nome'>Nome:</label><br>
					<input name='nome' type='text' value=".$row['nome']."><br><br>

					<label for='email'>Email:</label><br>
					<input name='email' type='email' value=".$row['email']."><br><br>

					<label for='cpf'>CPF:</label><br>
					<input name='cpf' type='number' value=".$row['CPF']."><br><br>

					<label for='endereco'>Endereço:</label><br>
					<input name='endereco' type='text' value=".$row['endereco']."><br><br>

					<label for='numero'>Número:</label><br>
					<input name='numero' type='number' value=".$row['numero']."><br><br>

					<label for='cidade'>Cidade:</label><br>
					<input name='cidade' type='text' value=".$row['cidade']."><br><br>

					<label for='estado'>Estado:</label><br>
					<input name='estado' type='text' value=".$row['estado']."><br><br>

					<input name='id' type='hidden' value=".$row['id_aluno'].">
					
					<input type='submit' name='editar_aluno' value='Editar'>
				</fieldset>
			</form></div>";
		}
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function geraFormularioProfessor($id){
		$connection=conectaBanco();
		$insere="SELECT * FROM professor WHERE id_professor=$id";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		
		while($row = mysqli_fetch_array($ins)){
			echo "<div id='block2'><br><br><form method='post' name='formP' action='controle.php'>
				<fieldset><legend>Editar Professor</legend>

					<label for='nome'>Nome:</label><br>
					<input name='nome' type='text' value=".$row['nome']."><br><br>

					<label for='email'>Email:</label><br>
					<input name='email' type='email' value=".$row['email']."><br><br>

					<label for='cpf'>CPF:</label><br>
					<input name='cpf' type='number' value=".$row['CPF']."><br><br>

					<label for='endereco'>Endereço:</label><br>
					<input name='endereco' type='text' value=".$row['endereco']."><br><br>

					<label for='numero'>Número:</label><br>
					<input name='numero' type='number' value=".$row['numero']."><br><br>

					<label for='cidade'>Cidade:</label><br>
					<input name='cidade' type='text' value=".$row['cidade']."><br><br>

					<label for='complemento'>Complemento:</label><br>
					<input name='complemento' type='text' value=".$row['complemento']."><br><br>

					<label for='estado'>Estado:</label><br>
					<input name='estado' type='text' value=".$row['estado']."><br><br>

					<input name='id' type='hidden' value=".$row['id_professor'].">
					
					<input type='submit' name='editar_professor' value='Editar'>
				</fieldset>
			</form></div>";
		}
		mysqli_close($connection);
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	function editarAluno($id, $nome, $email, $CPF, $endereco, $numero, $cidade, $estado){
		$connection=conectaBanco();
		$insere="UPDATE aluno SET nome='$nome', email='$email', CPF='$CPF', endereco='$endereco', numero='$numero', cidade='$cidade', estado='$estado' WHERE id_aluno=$id";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		mysqli_close($connection);
	}
	function editarProfessor($id, $nome, $email, $CPF, $endereco, $numero, $complemento, $cidade, $estado){
		$connection=conectaBanco();
		$insere="UPDATE professor SET nome='$nome', email='$email', CPF='$CPF', endereco='$endereco', numero='$numero',complemento='$complemento', cidade='$cidade', estado='$estado' WHERE id_professor=$id";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		mysqli_close($connection);
	}
?>
</body>
</html>

