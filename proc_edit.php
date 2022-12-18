<?php 

session_start();

include_once('conn.php');

$id 			= $_POST['id'];	 		
$nome 			= $_POST['nome'];
$email 			= $_POST['email'];
$idade 			= $_POST['idade'];	 	
$contato		= $_POST['contato'];
$contatoSec		= $_POST['contatoSec'];
$endereco		= $_POST['endereco'];
$escolaridade	= $_POST['escolaridade'];


$sql = "UPDATE  cadcb SET nome = '$nome',idade = '$idade',email = '$email',contato = '$contato',
contatoSec = '$contatoSec', escoldaridade = '$escolaridade', endereco = '$endereco' WHERE id = '$id'";


if (mysqli_affected_rows($conexao)) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>USUÁRIO ATUALIZADO COM SUCESSO!</p></center>";
	
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

