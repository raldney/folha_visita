<?php



class bancoUsuario {

    public function getAdapter() {
        return $this->adapter;
    }

    public function setAdapter($adapter) {
        $this->adapter = $adapter;
    }

    public function __construct(Database $banco) {
        $this->setAdapter($banco);
    }

    public function cadastrarUsuario(Usuario $user) {
        $usuario = $user;
        $sql = sprintf("SELECT * FROM usuario WHERE nome_usuario='" . $usuario->getNome() . "' AND email_usuario= '" . $usuario->getEmail() . "';");
        $stmt = $this->getAdapter()->executar($sql);
        if ($stmt->rowCount() == 0) {
            $sql = sprintf("INSERT INTO `usuario`( `nome_usuario`, `senha_usuario`, `email_usuario`, `site_usuario`)"
                    . " VALUES ('%s','%s','%s','%s')", $usuario->getNome(), $usuario->getEmail(), $usuario->getSenha(), $usuario->getWebsite());
            $stmt = $this->getAdapter()->executar($sql);
            return $stmt;
        }
    }

    public function logarUsuario(Usuario $user) {
        $usuario = $user;
        $sql = sprintf("SELECT * FROM usuario WHERE nome_usuario='" . $usuario->getNome() . "' AND senha_usuario= '" . $usuario->getSenha() . "';");
        $stmt = $this->getAdapter()->executar($sql);
        if ($stmt->rowCount() <= 0) {
            echo 'Não foi possivel efetuar o login!';
            
        }else{
            return $stmt;
        }
    }

}
