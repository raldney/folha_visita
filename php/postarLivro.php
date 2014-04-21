<?php

function __autoload($classe) {
    require_once '../classes/' . $classe . '.class.php';
}

$msg = filter_input(INPUT_POST, 'mensagem');
$data = date("d/m/Y");
$mysql = new Mysql('localhost', 'root', '', 'livro_visita');
$protege = new Seguranca($mysql);
$postagem = new Mensagem($data, $_SESSION['usuarioId'], addslashes($msg));
$postar = new postarMensagem($mysql);
if ($postar->postarMensagem($postagem)) {
       echo "<table class='postagem' >
                    <tr>
                        <td colspan='2' class='data' align='right;'>
                            $data
                        </td>
                    </tr>
                    <tr>
                        <td class='nome'>
                            <strong>{$_SESSION['usuarioNome']}</strong>
                        </td>
                        <td class='email'>
                            {$_SESSION['usuarioEmail']}
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' class='site'>
                        {$_SESSION['usuarioSite']}
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' class='mensagem'>" .
            nl2br(strip_tags(htmlspecialchars($msg)))
            . "</td>
                    </tr>
                  </table>";
} else {
    echo 'Mensagem não enviada';
}

