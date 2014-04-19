<?php

class Mensagem {

    function __construct($date, $usuario, $conteudo) {
        $this->setDate($date);
        $this->setUsuario($usuario);
        $this->setConteudo($conteudo);
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function cadastrarMensagem() {
        require_once "conecta.php";
        $usuario = $this->getUsuario();
        $conteudo = $this->getConteudo();
        $date = $this->getDate();
        $insere = mysql_query("INSERT INTO  `livro_visita`.`mensagem` (`id_usuario` ,`ctd_mensagem` ,`data_mensagem`)VALUES ('$usuario',  '$conteudo',  '$date') ;")
                or die(mysql_error());
        if (!$insere) {
            echo "Não foi possível fazer o sua postagem!";
        } else {
            $this->exibirMensagens();
        }
        $this->exibirMensagens();
    }

    public function exibirMensagens() {
        $postagens = mysql_query("SELECT m.data_mensagem, u.nome_usuario, u.email_usuario, m.ctd_mensagem
FROM usuario u
JOIN mensagem m
WHERE u.id_usuario = m.id_usuario
ORDER BY m.id_mensagem DESC limit 0,5");
        $resultado = mysql_fetch_assoc($postagens);
        $return = "<div>";
        if (empty($resultado)) {
            return false;
        } else {

            while ($linha = mysql_fetch_array($postagens)) {
                $return.= "<p>" . $linha["data_mensagem"] . "</p>";
                $return.= "<H2>" . $linha["nome_usuario"] . "</h2>";
                $return.= "<h3>" . $linha["email_usuario"] . "</h3>";
                $return.= "<p>" . $linha["ctd_mensagem"] . "</p>";
            }
            $return .="</div>";

            echo "$return";
        }
    }

}
