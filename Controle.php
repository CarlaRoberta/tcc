<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <nav class="nav navbar-default">  
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#nav" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="Controle.php"  class="navbar-brand" >Controle</a> 
                    </div>
                    <div id="nav" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav"> 
                            <li> <a href="Home.php" >Home</a></li>
                            <li> <a href="Cadastro.php">Cadastro</a> </li>
                            <li> <a href="Contato.php">Contato</a> </li>
                        </ul>
                    </div>
                </div>
            </nav></header>
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
            <div class="form-group">
                <div class="col-sm-2">
                    <select  class="form-control input-sm">
                        <option>Predio</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select  class="form-control input-sm" >
                        <option>Sala</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="botões" style="margin-top: 10%;">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary btn-lg active">Ligar</button>
                    <button type="button" class="btn btn-primary btn-lg active">Desligar</button>
                </div><br><br>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary btn-lg active">Aumentar Temperatura</button>
                    <button type="button" class="btn btn-primary btn-lg active">Diminuir Temperatura</button>
                </div>
            </div>
        </div>
        <div class="fim">
            <div class="rodape_esquerda">
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
            <div class="img_rodape">
                <img style="width: 40%; height: 40%;" src="img/logo.png" alt=""/>    
            </div>
        </div>
        <script src="jquery-1.12.4.min.js"></script>
        <script> window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
