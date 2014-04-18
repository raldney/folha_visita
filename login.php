<?php

require_once "classes/seguranca.php";
$proteger = new Seguranca();

require_once "conecta.php";

$usuario = addslashes(trim($_REQUEST["usuario"]));
$senha = addslashes(trim($_REQUEST["senha"]));
if ($proteger->validaUsuario($usuario, $senha) == true) {

    echo '<p >Logado com Sucesso!</p>';
} else {
    echo '<p >Erro ao efetuar o login. Dados incorretos!</p>';
}


