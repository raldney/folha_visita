<?php

class Usuario {

    private $nome;
    private $senha;
    private $email;

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

    public function cadastrarUsuario() {
        require_once "conecta.php";
        $nome = $this->getNome();
        $senha = $this->getSenha();
        $email = $this->getEmail();
        $verificar = mysql_query("SELECT * FROM usuario WHERE nome_usuario='$nome' AND email_usuario= '$email'");
        if (mysql_num_rows($verificar) == 0) {
            $insere = mysql_query("INSERT INTO `usuario`( `nome_usuario`, `senha_usuario`, `email_usuario`) VALUES ('$nome','$senha','$email')") or die(mysql_error());
            if (!$insere) {
                echo "Não foi possível fazer o seu cadastramento!";
            }
        } else {
            echo "Usuario e E-Mail ja existem!!!";
        }
    }

  

    

}
