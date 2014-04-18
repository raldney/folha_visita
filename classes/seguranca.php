<?php

require_once "conecta.php";
require_once "usuario.php";
$_SG['conectaServidor'] = false;    // Abre uma conexão com o servidor MySQL
$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()
$_SG['caseSensitive'] = false;     // Usar case-sensitive
$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.
$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // Usuário MySQL
$_SG['senha'] = '';                // Senha MySQL
$_SG['banco'] = 'usuario';            // Banco de dados MySQL
$_SG['paginaLogin'] = 'login.php'; // Página de login
$_SG['tabela'] = 'usuario';       // Nome da tabela onde os usuários são salvos
// Verifica se precisa iniciar a sessão
if ($_SG['abreSessao'] == true) {
    session_start();
}

class Seguranca {

    public function validaUsuario($nome, $senha) {
        global $_SG;
        $usuario = new Usuario();
        $busca = mysql_query("SELECT  `email_usuario`,`nome_usuario` FROM `usuario` WHERE nome_usuario='$nome' AND senha_usuario= '$senha' LIMIT 1");
        $resultado = mysql_fetch_assoc($busca);

        if (empty($resultado)) {
            return false;
        } else {
            $_SESSION['usuarioEmail'] = $resultado['email_usuario']; // Pega o valor da coluna 'id do registro encontrado no MySQL
            $_SESSION['usuarioNome'] = $resultado['nome_usuario']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
           
// Verifica a opção se sempre validar o login
            if ($_SG['validaSempre'] == true) {
// Definimos dois valores na sessão com os dados do login
                $_SESSION['usuarioLogin'] = $nome;
                $_SESSION['usuarioSenha'] = $senha;
                return true;
            }
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
                    expulsaVisitante();
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
        unset($_SESSION['usuarioEmail'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);
// Manda pra tela de login
        header("Location: index.php");
    }

}
