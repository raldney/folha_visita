<?php

require_once "classes/seguranca.php";
$proteger = new Seguranca();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "conecta.php";
    $usuario = (isset(addslashes(trim($_POST["usuario"])))) ? addslashes(trim($_POST["usuario"])) : '';
    $senha = (isset(addslashes(trim($_POST["senha"])))) ? addslashes(trim($_POST["senha"])) : '';
    $usuario = addslashes(trim($_POST["usuario"]));
    $senha = addslashes(trim($_POST["senha"]));
    if ($proteger->validaUsuario($usuario, $senha) == true) {

        header("Location: livro.php");
    } else {
        echo 'Combinação invalida';
        $proteger->expulsaVisitante();
    }
}

