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
                        <a href="Cadastro.php" class="navbar-brand" >Cadastro</a>
                    </div>
                    <div id="nav" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav"> 
                            <li><a href="Home.php" >Home</a> </li>
                            <li> <a href="Controle.php" >Controle</a> </li>
                            <li> <a href="Contato.php">Contato</a> </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </header>
        <div class="container">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
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
