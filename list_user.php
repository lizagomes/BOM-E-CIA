<?php
session_start();

include_once('conn.php');

$sql = "SELECT * FROM cadcb ORDER BY id ASC";
$result =  $conexao->query($sql); // consulta



//Mostrar o resultado da consulta query de uma comando SQL
//print_r($result);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>LISTA SGCI</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        td {
            color: #000;
        }
    </style>

</head>

<body id="fundoList">
    <div>
        <CENTER>
            <br>
            <h3 style="color: #000;">
                <p style="margin-top: 10px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">LISTA DE CADASTRADOS - CFC - BASM</p>
            </h3>
            <hr>
        </CENTER>
    </div>
    <div style="background-color: blue;width:250px;margin-left:-10px;border-radius:30px;">
        <a href="cadRec.html" style="text-decoration: none;">
            <p style=" color: #FFF;margin-left:30px;"> Voltar ao formulário</p>
        </a>
    </div>
    <div style="background-color: blue;width:250px;margin-left:-10px;border-radius:30px;">
        <a href="pagina_ini.html" style="text-decoration: none;">
            <p style="color:#FFF;margin-left:30px;">Voltar a página de inicio</p>
        </a>
    </div>
    <br>
    <!--Fazendo o guia de pesquisa-->
<div style="margin-left: 500px;margin-top:-80px;">    
    <input type="text" class="form-control" name="buscar" style="width:400px;" placeholder="Pesquise.....">
    <button class="btn btn-primary" type="submit" style="margin-left: 410px;margin-top:-65px;">
        <i class="bi bi-search"></i>
    </button>
    </div>
    <br>
     <!--Deletar todos os registros da lista --->
     <div style="margin-top: -86px;margin-left:965px;">
        <button class="btn btn-danger">
           <a id="likDel" style="text-decoration-color:red;" href='delete_cb.php?id=$user_data[ID]'>
            <i style="color: #FFF;" class="bi bi-file-earmark-x"></i>
           </a>
        </button>
    </div>
    <br>
    <br>
    <br>
    <table class="table" style="width: 500px;margin-left:200px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID </th>
                <th scope="col"> NOME </th>
                <th scope="col"> IDADE </th>
                <th scope="col"> EMAIL </th>
                <th scope="col"> TELEFONE1 </th>
                <th scope="col"> TELEFONE2 </th>
                <th scope="col"> ESCOLARIDADE </th>
                <th scope="col"> ENDEREÇO </th>
                <th scope="col">....</th>

            </tr>
           
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['ID'] . "</td>";
                echo "<td>" . $user_data['NOME'] . "</td>";
                echo "<td>" . $user_data['IDADE'] . "</td>";
                echo "<td>" . $user_data['EMAIL'] . "</td>";
                echo "<td>" . $user_data['TELEFONE1'] . "</td>";
                echo "<td>" . $user_data['TELEFONE2'] . "</td>";
                echo "<td>" . $user_data['ESCOLARIDADE'] . "</td>";
                echo "<td>" . $user_data['ENDERECO'] . "</td>";
                echo "<td>
                <a class='btn btn-primary' style='margin-top:50px;' href='edit_cb.php?id=$user_data[ID]'><i class='bi bi-pencil-square'></i></a></td>";
                /*BUTTON editar linha */
                echo "<td>
                <a class='btn btn-danger' style='margin-left:-66px;margin-top:-0px;' href='exclu_cb.php?id=$user_data[ID]'><i class='bi bi-trash3'></i></a>
                </td>";
                /*BUTTON editar linha */
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>



</body>

</html>