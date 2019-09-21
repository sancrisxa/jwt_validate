<?php

require 'jwt.php';

$jwt = new JWT();

$token = $jwt->create(array('id_user' => 123, "nome" => "Bonieky Lacerda"));

echo 'Token ' . $token;