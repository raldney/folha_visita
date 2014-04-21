<?php
function __autoload($classe) {
    require_once '../classes/' . $classe . '.class.php';
}

$mysql = new Mysql('localhost', 'root', '', 'livro_visita');
$logar = new Seguranca($mysql);

$postsArray = filter_input_array(INPUT_POST, array(
    'nome' => FILTER_SANITIZE_STRING,
    'senha' => FILTER_SANITIZE_STRING
        ));

$posts = array_map("strip_tags", $postsArray);
$user = new Usuario($posts['nome'], $posts['senha'], '', '');
if ($logar->validaUsuario($user)) {
    echo 'Logado com Sucesso';
} else {
    echo 'Erro com a validação';
}
