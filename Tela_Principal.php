<header>
    <?php
    require './inc_menu.php';
    ?>
</header> 
<div class="container">
    <?php
    $email = $_GET["email"];
    if (empty($email)) {
        ?>
        <div class="alert-danger">
            <h3>Falha ao abrir formulário de alteração</h3>
            <h4>Para abrir está tela vá até a <a href="Autenticacao_Usuario.php">Autenticação de Usuario</a> e clique no botão Editar </h4>
        </div>
        <?php
        exit;
    }
    ?>


    <div class="row" >
        <div class="col-sm-6 col-md-4" >
            <div class="thumbnail">
                <a href="Cadastro_Marca.php"><img src="img/imgCadastro.jpg" alt="" /></a>
                <div class="caption">
                    <h3>Cadastro</h3>
                    <p>Configure dados importantes para o funcionamento do sistema.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" >
            <div class="thumbnail">
                <a href="Agendar.php"><img src="img/imgAgendamento.jpg" alt=""/></a>
                <div class="caption">
                    <h3>Agenda</h3>
                    <p>Programe eventos de comandos em datas e horarios especificos.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" >
            <div class="thumbnail">
                <a href="Controle.php"><img src="img/imgControle.jpg" alt=""/></a>
                <div class="caption">
                    <h3>Controle</h3>
                    <p>Controle os Condicionadores de Ar remota mente enviando comandos.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require './inc_rodape.php';
?>