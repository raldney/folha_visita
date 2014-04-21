<?php

class postarMensagem {

    public function getAdapter() {
        return $this->adapter;
    }

    public function setAdapter($adapter) {
        $this->adapter = $adapter;
    }

    public function __construct(Database $banco) {
        $this->setAdapter($banco);
    }

    public function postarMensagem(Mensagem $msg) {
        $sql = sprintf("INSERT INTO  `livro_visita`.`mensagem` (`id_usuario` ,`ctd_mensagem` ,`data_mensagem`)VALUES ('%s',  '%s',  '%s') ;", $msg->getUsuario(), $msg->getConteudo(), $msg->getDate());
        $stmt = $this->getAdapter()->executar($sql);
        return $stmt;
    }

    public function listarMensagem($pag) {
        $sql = sprintf("SELECT m.data_mensagem,u.site_usuario, u.nome_usuario, u.email_usuario, m.ctd_mensagem
                        FROM usuario u JOIN mensagem m
                        WHERE u.id_usuario = m.id_usuario
                        ORDER BY m.id_mensagem DESC ");
        $todos = $this->getAdapter()->executar($sql);

        $lim = "10";
        $postInicial = $pag * $lim;
        $postFinal = $postInicial + $lim;
        $pagTotal = ($todos->rowCount()) / $lim;

        $stmt = $this->getAdapter()->executar($sql . " limit 0 ," . $postFinal . "");
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // aqui eu mostro os valores de minha consulta
            echo "<table class='postagem' >
                    <tr>
                        <td colspan='2' class='data' align='right;'>
                            {$linha['data_mensagem']}
                        </td>
                    </tr>
                    <tr>
                        <td class='nome'>
                            <strong>{$linha['nome_usuario']}</strong>
                        </td>
                        <td class='email'>
                            {$linha['email_usuario']}
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' class='site'>
                        {$linha['site_usuario']}
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' class='mensagem'>" .
            nl2br($linha['ctd_mensagem'])
            . "</td>
                    </tr>
                  </table>";
        }
    }

}
