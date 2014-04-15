<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$titulo}</title>
    </head>
    <body>
        <p><a href="logout.php">Logout!</a></p>
        <form action="envia.php" method="post" id="form-contato" >
            <table border="3" align="center">
                <tr>
                    <td>
                        <label>Nome:</label>
                    </td>
                    <td>
                        <label for="nome">{$nome}</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label >E-Mail:</label>
                    </td>
                    <td>
                        <label for="email">{$email}</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mensagem">Mensagem:</label>  
                    </td>
                    <td>

                        <textarea rows="5" cols="3"  name="msg" id="msg" ></textarea><br />
                    </td>
                </tr>



                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Enviar" name="enviar" id="enviar_contato" />
                    </td>
                </tr>
            </table>

        </form>

    </body>
</html>
