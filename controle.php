<?php
	include("func.php");

	if(isset($_POST['cadastrar_aluno'])){
		cadastraAluno($_POST['nome1'], $_POST['email1'], $_POST['cpf1'], $_POST['endereco1'], $_POST['numero1'], $_POST['cidade1'], $_POST['estado1']);
	}
	elseif(isset($_POST['cadastrar_professor'])){
		cadastraProfessor($_POST['nome2'], $_POST['email2'], $_POST['cpf2'], $_POST['endereco2'], $_POST['numero2'], $_POST['complemento2'], $_POST['cidade2'], $_POST['estado2']);	
	}
	elseif(isset($_POST['consultar_professor'])){
		consultarProfessor($_POST['nome_professor']);
	}
	elseif(isset($_POST['consultar_aluno'])){
		consultarAluno($_POST['nome_aluno']);
	}
	elseif(isset($_POST['consultar_cidade'])){
		consultarCidade($_POST['nome_cidade']);
	}
	elseif(isset($_POST['consultar_todos_professores'])){
		consultarTodosProfessores();
	}
	elseif(isset($_POST['consultar_todos_alunos'])){
		consultarTodosAlunos();
	}
	elseif(isset($_GET['editar']) and isset($_GET['aluno'])){
		$id=$_GET['id'];
		geraFormularioAluno($id);
	}
	elseif(isset($_GET['editar']) and isset($_GET['professor'])){
		$id=$_GET['id'];
		geraFormularioProfessor($id);
	}
	elseif(isset($_POST['editar_aluno'])){
		editarAluno($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['endereco'], $_POST['numero'], $_POST['cidade'], $_POST['estado']);
		echo "Alteração Concluida!";
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	elseif(isset($_POST['editar_professor'])){
		editarProfessor($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['endereco'], $_POST['numero'], $_POST['complemento'], $_POST['cidade'], $_POST['estado']);
		echo "Alteração Concluida!";
		echo"<br><br><a href='index.php'>Voltar</a>";
	}
	elseif(isset($_GET['excluir']) and isset($_GET['aluno'])){
		$id=$_GET['id'];
	
		echo "<div style=\" width: 25%; \"><form method='post' name='form1' action='controle.php'>
			<label>Tem Certeza que Deseja Excluir este Aluno?</label><br>
			<input style=\" width: 25%; \" name='botao1' value='sim1' type='radio'><label for='botao1'>Sim</label>
			<input style=\" width: 25%; \" name='botao1' value='nao1' type='radio'><label for='botao1'>Não</label><br><br>
			<input style=\" width: 25%; \" name='id' type='hidden' value=$id>
			<input name='confirma1' type='submit' value='Confirmar'><br>
		</form></div>";
		echo"<br><br><a href='index.php'>Voltar</a>";	
	}
	elseif(isset($_GET['excluir']) and isset($_GET['professor'])){
		$id=$_GET['id'];

		echo "<div style=\" width: 25%; \"><form method='post' name='form1' action='controle.php'>
			<label>Tem Certeza que Deseja Excluir este Professor?</label><br>
			<input style=\" width: 25%; \" name='botao2' value='sim2' type='radio'><label for='sim'>Sim</label>
			<input style=\" width: 25%; \" name='botao2' value='nao2' type='radio'><label for='nao'>Não</label><br><br>
			<input style=\" width: 25%; \" name='id' type='hidden' value=$id>
			<input type='submit' name='confirma2' value='Confirmar'><br>
		</form></div>";
		echo"<br><br><a href='index.php'>Voltar</a>";	
	}
	elseif(isset($_POST['id']) and isset($_POST['botao1']) and isset($_POST['confirma1'])){
		if($_POST['botao1']=='sim1')
			excluirAluno($_POST['id']);
	}
	elseif(isset($_POST['id']) and isset($_POST['botao2']) and isset($_POST['confirma2'])){
		if($_POST['botao2']=='sim2')	
			excluirProfessor($_POST['id']);
	}
	elseif(isset($_POST['id']) and isset($_POST['botao1']) and isset($_POST['confirma1'])){
		if($_POST['botao1']=='nao1')
			header("Location:index.php");
	}
	elseif(isset($_POST['id']) and isset($_POST['botao2']) and isset($_POST['confirma2'])){
		if($_POST['botao2']=='nao2')	
			header("Location:index.php");
	}
?>