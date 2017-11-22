
<?php

    error_reporting(E_ALL | E_STRICT);

    $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
//192.168.0.160
    socket_bind($socket, '192.168.0.160', 8898);

    $from = "";
    $port = 8898;
    $buf = '';
    $cmdCapturado = '';
    while ($buf != "]") {
        socket_recvfrom($socket, $buf, 12, 0, $from, $port);
        $cmdCapturado .= ',';
        $cmdCapturado .= $buf;
    }
    //Tratar conteudo de cmdCapturado, removendo header e trailer
    
