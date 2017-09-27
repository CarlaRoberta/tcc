<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/singin.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body style="background-color:  lightgrey;">
        <div class="container">
            <form class="form-signin" action="verificar.php" method="POST" >
                <img src="img/login.png" alt=""/>
                <h2 class="form-signin-heading">Sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <a  href="Cadastrouser.php" style="color: red;">Cadastre-se</a>
                <div class="form-group">
                    <div class="enviar_apagar" >
                        <div class="text-center">
                            <input  href="Home.php" style="background-color: silver;" type="submit" value="Sing in" id="botao_submit" class="btn btn-info" >
                            <input style="background-color: silver;" type="reset" value="Cancel" id="botao_limpar" class="btn btn-info" >
                        </div>
                    </div>
                </div>
            </form>
        </div> 
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

<!--<div class="checkbox">
   <label>
        <input type="checkbox" value="remember-me"> Remember me
    </label>
</div> -->