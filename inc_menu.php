<!DOCTYPE html>
<?php
require 'conexao.php';
$sql = "select * from usuario";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_assoc($result);
$email = $dados['USU_EMAIL'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/rodape.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css.css" rel="stylesheet" type="text/css"/>
        <link href="css/menuL.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <ul class="nav">
            <nav class="nav navbar-default">  
                <div class="container-fluid">
                    <div class="navbar-header" >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#nav" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" >Menu</a>
                    </div>
                    <div id="nav" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav"> 
                            <li> <a href="Tela_Principal.php?id= <?php echo $email; ?>" >Home</a></li>
                            <li> <a href="Controle.php" >Controle</a> </li>
                            <li> <a href="Cadastro_Marca.php">Cadastro</a> </li>
                            <li> <a href="Agendar.php">Agendamento</a> </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </ul>