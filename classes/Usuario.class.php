<?php

class Usuario {

    public function __construct($nome, $senha, $email, $website) {
        $this->setNome(strip_tags(htmlspecialchars($nome)));
        $this->setSenha(strip_tags(htmlspecialchars($senha)));
        $this->setEmail(strip_tags(htmlspecialchars($email)));
        $this->setWebsite(strip_tags(htmlspecialchars($website)));
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }

}
