<?php

require_once "classes/mensagem.php";
require_once "classes/seguranca.php";
require_once "conecta.php";
$postagem = new Mensagem();
$data = date("d/m/Y");
$postagem->setUsuario($_SESSION['usuarioId']);
$postagem->setDate(addslashes(trim($data)));
$postagem->setConteudo(addslashes(trim($_POST["mensagem"])));
$postagem->cadastrarMensagem();


