<?php

function __autoload($classe) {
    require_once '../classes/' . $classe . '.class.php';
}

$msg = filter_input(INPUT_POST, 'mensagem');
$data = date("d/m/Y");
$mysql = new Mysql('localhost', 'root', '', 'livro_visita');
$protege = new Seguranca($mysql);
$postagem = new Mensagem($data, $_SESSION['usuarioId'], addslashes($msg));
$postar = new postarMensagem($mysql);
if ($postar->postarMensagem($postagem)) {
      $postar->listarMensagem(0);
} else {
    echo 'Mensagem não enviada';
}

