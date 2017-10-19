<?php

if (!$sock_L = socket_create_listen(4553, 4)) {
    echo"Erro ao criar lista";
    $erro = socket_last_error();
    $erroS = socket_strerror($erro);
    var_dump($erroS);
} else {
        if (!$sock_B = socket_bind($sock, "192.168.0.108")) {
            echo "Erro ao dar bind";
            $erro = socket_last_error();
            $erroS = socket_strerror($erro);
            var_dump($erroS);
        } else {

            if (!socket_listen($socket)) {
                echo "erro listen";
                $erro = socket_last_error();
                $erroS = socket_strerror($erro);
                var_dump($erroS);
            } else {

                if (!$sock_A = socket_accept($sock)) {
                    echo "Erro ao aceitar conexão";

                    $erro = socket_last_error();
                    $erroS = socket_strerror($erro);
                    var_dump($erroS);
                } else {
                    if (!socket_read($sock, 4)) {
                        echo "Erro ao ler o tamanho";
                        $erro = socket_last_error();
                        $erroS = socket_strerror($erro);
                        var_dump($erroS);
                    } else {
                        if (!socket_recvmsg($sock, $message)) {
                            echo "Erro ao ler a mensagem";
                            $erro = socket_last_error();
                            $erroS = socket_strerror($erro);
                            var_dump($erroS);
                        } else {

                            var_dump($message);
                            socket_shutdown($sock);
                        }
                    }
                }
            }
        }
    }