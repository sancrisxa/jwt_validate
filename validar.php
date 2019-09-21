<?php

require 'jwt.php';

$jwt = new JWT();

 

if (!empty($_GET['jwt'])) {
    $token = $_GET['jwt'];

    $info = $jwt->validate($token);

    print_r($info);

    if ($info) {
        echo "Token Válido!";
        echo "Meu nome: " . $info->nome;
    } else {
        echo "Token Inválido";
    }
} else {
    echo "Token não enviado";
}

