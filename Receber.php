
<?php

    error_reporting(E_ALL | E_STRICT);

    $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
//192.168.0.160
    socket_bind($socket, '192.168.0.160', 8898);

    $from = "";
    $port = 8898;
    $buf = '';
    $l = '';
    while ($buf != "]") {
        socket_recvfrom($socket, $buf, 12, 0, $from, $port);
        $l .= ',';
        $l .= $buf;
    }
