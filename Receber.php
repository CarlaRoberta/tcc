
<?php

    error_reporting(E_ALL | E_STRICT);

    $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

    socket_bind($socket, '192.168.0.107', 8898);

    $from = "";
    $port = 8898;
    $buf = '';
    $l = '';
    while ($buf != "a") {
        socket_recvfrom($socket, $buf, 12, 0, $from, $port);
        $l .= ',';
        $l .= $buf;
    }
