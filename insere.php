<?php 

session_start();

include_once('conn.php');

$id = 0;
$nome 			= $_POST['nome'];
$email 			= $_POST['email'];
$idade 			= $_POST['idade'];	 	
$contato		= $_POST['contato'];
$contatoSec		= $_POST['contatoSec'];
$endereco		= $_POST['endereco'];
$escolaridade	= $_POST['escolaridade'];


$sql = "INSERT INTO cadrec (
	id,
	nome, 
	email,
	idade,
	telefone1,
	telefone2,
	endereco,
	escolaridade

) VALUES ('$id','$nome', '$email', '$idade', '$contato', '$contatoSec', '$endereco', '$escolaridade')";


if ($conexao->query($sql) === TRUE) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>USUÁRIO CADASTRADO COM SUCESSO!</p></center>";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

