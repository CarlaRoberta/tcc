<?php
require 'conexao.php';

$id_enviar = $_GET["id"];

$sql = "SELECT DISTINCT modelo_comandos.*,modelo.*,comandos.*
            FROM modelo_comandos
            INNER JOIN modelo ON modelo_comandos.MOD_ID = modelo.MOD_ID 
            INNER JOIN comandos ON modelo_comandos.CMD_ID = comandos.CMD_ID
            WHERE modelo_comandos.CMD_ID = $id_enviar";

$result = mysqli_query($con, $sql);

$dados = mysqli_fetch_assoc($result);

$codaprendido = $dados ['MCM_CODAPRENDIDO'];
//var_dump($codaprendido);
$idmodelo = $dados ['MOD_ID'];
//var_dump($idmodelo);
$server_ip = '192.168.0.240';
$server_port = 8888;
$beat_period = 5;
$message = explode(",", $codaprendido);
//var_dump($message);

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
$foi = FALSE;
for ($i = 0; $i <= 2; $i++) {

    socket_sendto($socket, $message[$i], 4, 0, $server_ip, $server_port);
    sleep(0.1);

    $foi = TRUE;
}
if ($foi == TRUE) {
    ?>
    <header>
        <?php
        require './inc_menu.php';
        ?>
    </header>
    <div class="container"> 
        <div class="alert alert-success" role="alert">Comando enviado com Sucesso</div> 
    <?php require './tabelambiente.php'; ?>
    </div>
    <?php
    require './inc_rodape.php';
}
?>