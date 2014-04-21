<?php

class Mensagem {

    function __construct($date, $usuario, $conteudo) {
        $this->setDate(strip_tags(htmlspecialchars($date)));
        $this->setUsuario(strip_tags(htmlspecialchars($usuario)));
        $this->setConteudo(strip_tags(htmlspecialchars($conteudo)));
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

}
