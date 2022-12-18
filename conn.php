<?php
		
        $host = "localhost";
        $user = "root";
        $pass = "";
        
        $database = "cadastrorec";
        
        $conexao = new mysqli($host, $user, $pass, $database);

        //$conexao = mysqli_connect('localhost', 'root', '', 'cadastrorec');
        
        if(!$conexao){
            die("Houve um erro: " . mysqli_connect_error());
        }

?>
		

