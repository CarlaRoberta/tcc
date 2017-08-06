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
            <?php require './inc_menu.php'; ?>
        </header>
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
        <?php
        require './inc_rodape.php';
        ?>