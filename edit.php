<?php

//iniciar sessao de conexão 
session_start();

//Conexão com o banco de dados
include_once('conn.php');

$id = $_GET['id'];

$sql = "SELECT * FROM cadcb WHERE id = '$id'";
$result_query = mysqli_query($conexao, $sql);
$result_user = mysqli_fetch_assoc($result_query);

//usado para ver se está pegando os dados para a exibição, no banco de dados
//print_r($result_user)

?>
 
<!DOCTYPE html>

<html lang="pt-br">

<head>

    <link rel="stylecheet" href="style.css">
    <meta charset="utf-8">

    <!--Link Boostrap CSS e JS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--Link Icons Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        input {
            width: 100px;
        }


    </style>

</head>


<body>
    <br>
    <center>
        <h3 id="tit" style="color: #000;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EDITAR MILITAR CADASTRADO</h3>

    </center>
    

    <br>
    <br>

    <center>
        <form method="POST"  action="proc_edit_cb.php" id="formCad" style="background-color: rgb(116, 116, 146);width: 760px; height: 500px;border-radius: 20px;margin-left: 30px;">
            <!--form 01-->
            <br>
            <div style="margin-left: -400px;">
                <div>
                    <input type="hidden" name="id" value="<?php echo $result_user['ID'] ?>">
                </div>
                <div class="form-group">
                    <label id="lname" style="color: #FFF;">
                        NOME:
                    </label>
                    <input style="width: 300px;"  maxlength="20" value="<?php echo $result_user['NOME']; ?>" type="text" class="form-control" name="nome" >
                </div>
                <br>
                <div class="form-group">
                    <label id="lidade" style="color: #FFF;">
                        IDADE:
                    </label>
                    <input style="width: 300px;" type="number"  value="<?php echo $result_user['IDADE']; ?>" class="form-control" name="idade" maxlength="2">
                </div>
                <br>
                <div class="form-group">
                    <label id="lemail" style="color: #FFF;">
                        EMAIL:
                    </label>
                    <input style="width: 300px;" type="email" value="<?php echo $result_user['EMAIL']; ?>" class="form-control"  name="email" >
                </div>
                <div class="form-group">
                    <label id="ltele" style="color: #FFF;">
                        TELEFONE PESSOAL:
                    </label>
                    <input style="width: 300px;" type="text" value="<?php echo $result_user['TELEFONE1']; ?>" class="form-control"  name="contato"  maxlength="15">
                </div>
                <br>
            </div>
            <!--form 02-->
            <div style="margin-left: 300px;margin-top:-415px;">
                <div class="form-group">
                    <label style="color: #FFF;">
                        TELEFONE SECUNDÁRIO
                    </label>
                    <input type="text" style="width: 300px;"  value="<?php echo $result_user['TELEFONE2']; ?>" id="tel" class="form-control" name="contatoSec"  maxlength="15">
                </div>
                <div class="form-group">
                    <label style="color: #fff;">
                        ENDEREÇO:
                    </label>
                    <input type="tel" style="width: 300px;" name="endereco"  value="<?php echo $result_user['ENDERECO']; ?>" class="form-control"  maxlength="30">
                </div>
                <div class="form-group">
                    <label style="color: #FFF;">
                        ESCOLARIDADE:
                    </label>
                    <select class="form-control" name="escolaridade"  value="<?php echo $result_user['ESCOLARIDADE']; ?>" style="width: 300px;">
                        <option>SELECIONE:</option>
                        <option>ENSINO FUNDAMENTAL - Incompleto</option>
                        <option>ENSINO FUNDAMENTAL - Completo </option>
                        <option> ENSINO MÉDIO - Incompleto</option>
                        <option> ENSINO MÉDIO - Completo</option>
                        <option> ENSINO TÉCNICO </option>
                        <option>ENSINO SUPERIOR - Incompleto</option>
                        <option>ENSINO SUPERIOR - Completo</option>
                    </select>
                </div>
            </div>

            <div id="btn" style="margin-top: 250px; margin-left: 20px;">
                <button class="btn btn-primary">ATUALIZAR</button>
            </div>


        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>

    </center>







</body>

</html>