<?php  
session_start();

include_once('conn.php');

$id = $_GET['id'];

$sql_remove = "DELETE FROM cadcb WHERE ";
$result_del = mysqli_query($conexao, $sql_remove);

if ($conexao->query($sqlDel) === TRUE) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>USUÁRIO EXCLUIDO COM SUCESSO!</p></center>";
} else {
	echo "Erro: " . $sql_remove . "<br>" . $conexao->error;
}

$conexao->close();

