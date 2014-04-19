<?php

$_SG['conectaServidor'] = false;    // Abre uma conexão com o servidor MySQL
$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()
$_SG['caseSensitive'] = false;     // Usar case-sensitive
$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.
$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // Usuário MySQL
$_SG['senha'] = '';                // Senha MySQL
$_SG['banco'] = 'livro_visita';            // Banco de dados MySQL
$_SG['paginaLogin'] = 'login.php'; // Página de login
$_SG['tabela'] = 'usuario';       // Nome da tabela onde os usuários são salvos
// Verifica se precisa iniciar a sessão
if ($_SG['abreSessao'] == true) {
    session_start();
}

class Seguranca {

    public function getAdapter() {
        return $this->adapter;
    }

    public function setAdapter($adapter) {
        $this->adapter = $adapter;
    }

    public function __construct(Database $banco) {
        $this->setAdapter($banco);
    }

    public function validaUsuario(Usuario $user) {
        global $_SG;
        $usuario = $user;
        $sql = sprintf("SELECT * FROM usuario WHERE nome_usuario='" . $usuario->getNome() . "' AND senha_usuario= '" . $usuario->getSenha() . "';");
        $stmt = $this->getAdapter()->executar($sql);

        if ($stmt->rowCount() == 0) {
            return false;
        } else {

            $resultado = $stmt->fetch(PDO::FETCH_OBJ);
            $_SESSION['usuarioId'] = $resultado->id_usuario;
            $_SESSION['usuarioEmail'] = $resultado->email_usuario; // Pega o valor da coluna 'id do registro encontrado no MySQL
            $_SESSION['usuarioNome'] = $resultado->nome_usuario; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
// Verifica a opção se sempre validar o login
            if ($_SG['validaSempre'] == true) {
// Definimos dois valores na sessão com os dados do login
                $_SESSION['usuarioLogin'] = $nome;
                $_SESSION['usuarioSenha'] = $senha;
            }
            return $stmt;
        }
    }

    public function protegePagina() {
        global $_SG;


        if (!isset($_SESSION['usuarioEmail']) OR ! isset($_SESSION['usuarioNome'])) {
// Não há usuário logado, manda pra página de login
            $this->expulsaVisitante();
        } else if (!isset($_SESSION['usuarioEmail']) OR ! isset($_SESSION['usuarioNome'])) {
// Há usuário logado, verifica se precisa validar o login novamente
            $usuario->setEmail($_SESSION['usuarioEmail']);
            $usuario->setNome($_SESSION['usuarioNome']);
            if ($_SG['validaSempre'] == true) {
// Verifica se os dados salvos na sessão batem com os dados do banco de dados
                if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
// Os dados não batem, manda pra tela de login
                    $this->expulsaVisitante();
                }
            }
        }
    }

    /**
     * Função para expulsar um visitante
     */
    public function expulsaVisitante() {

        global $_SG;
// Remove as variáveis da sessão (caso elas existam)
        session_destroy();
// Manda pra tela de login
        header("Location: index.php");
    }

}
