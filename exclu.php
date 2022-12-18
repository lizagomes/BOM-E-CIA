<?php 

session_start();

include_once('conn.php');

$id = $_GET['id'];

$sqlDel = "DELETE FROM cadcb WHERE id =  '$id'";
$result_del = mysqli_query($conexao, $sqlDel);

if ($conexao->query($sqlDel) === TRUE) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>USUÁRIO EXCLUIDO COM SUCESSO!</p></center>";
} else {
	echo "Erro: " . $sqlDel . "<br>" . $conexao->error;
}

$conexao->close();



?>