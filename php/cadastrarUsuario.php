<?php

function __autoload($classe) {
    require_once '../classes/' . $classe . '.class.php';
}

$mysql = new Mysql('localhost', 'root', '', 'livro_visita');
$cadastro = new bancoUsuario($mysql);
$postsArray = filter_input_array(INPUT_POST, array(
    'nome' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_STRING,
    'website' => FILTER_SANITIZE_STRING,
    'senha' => FILTER_SANITIZE_STRING
        ));
$posts = array_map("strip_tags", $postsArray);
$user = new Usuario($posts['nome'], $posts['senha'], $posts['email'], $posts['website']);
if ($cadastro->cadastrarUsuario($user)) {
    echo 'Cadastrado com Sucesso';
} else {
    echo 'Não foi possivel cadastrar Usuario!';
}
