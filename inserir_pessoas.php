<?php

require './conexao.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "INSERT INTO `USUARIO` (`nome`, `email`, `senha`) VALUES ('" . $nome . "', '" . $email . "', '" . $senha . "')";

$inserir = mysql_query($query);
if ($inserir) {
    echo "Notícia inserida com sucesso!";
} else {
    echo "Não foi possível inserir a notícia, tente novamente.";
// Exibe dados sobre o erro:
    echo "Dados sobre o erro:" . mysql_error();
}
