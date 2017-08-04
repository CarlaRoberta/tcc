<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav class="nav navbar-default">  
            <div class="container-fluid">
                <div class="menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#nav" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Home.php" >Home</a>
                </div>
                <div id="nav" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav"> 
                        <li> <a href="Controle.php" >Controle</a> </li>
                        <li> <a href="Cadastro.php">Cadastro</a> </li>
                        <li> <a href="#Contato.php">Contato</a> </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div class="container">
            <div class="panel panel-danger">
                <div class="panel-heading">Controle</div>
                <div class="panel-body">
                    <p>Aperte os Botões para cumprir determinadas ações como:</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Ligar ou Desligar</li>
                    <li class="list-group-item">Aumentar ou diminuir temperaturas</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-1">
                    <div class="input-group">
                        <div class="dropdown">                     
                            <div class="input-group-btn">              
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Sala
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Another action</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="input-group">
                        <div class="input-group-btn">  
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Predio
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Another action</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="botões">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-primary btn-lg active">Ligar</button>
                    <button type="button" class="btn btn-primary btn-lg active">Desligar</button>
                </div><br><br>
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-primary btn-lg active">Aumentar Temperatura</button>
                    <button type="button" class="btn btn-primary btn-lg active">Diminuir Temperatura</button>
                </div>
            </div>
        </div>
        <div class="fim">
            <address>
                <strong>CONTROLE ALTERNATIVO DE CONDICIONADORES DE AR A PARTIR DE SISTEMA COMPUTADORIZADO</strong><br>
                Instituto Federal, Votuporanga<br>
            </address>

            <address>
                <strong>Contato</strong><br>
                <p>Email: Carlarobertaoliveira64@gmail.com</p>
                <p>Email: Joao.votu.jv@gmail.com</p><br>
            </address>
        </div>
        <script src="jquery/jquery-1.12.4.min.js"></script>
        <script> window.jQuery || document.write('<script src="../../assets/js/vendor/jquery/jquery.min.js"><\/script>')</script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
