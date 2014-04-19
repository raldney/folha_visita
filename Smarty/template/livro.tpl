<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
        <script type="text/javascript" src="jquery-1.4.2.js"></script>
        <script type="text/javascript" src="postaLivro.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$titulo}</title>
    </head>
    <body>
        <table id="organizador" >
            <tr>
                <td>
                </td>
                <td >
                    <a href="logout.php" class="buttons" style="margin-left: 200px;">Logout!</a>
                </td>
            </tr>

            <form action="postarLivro.php" method="post" id="form-login" >

                <tr>
                    <td>
                        <h1>Nome:</h1>
                    </td>
                    <td >
                        <h1>{$nome}</h1>
                    </td>
                </tr>
                <tr>
                    <td >
                        <h2>E-Mail:</h2>
                    </td>
                    <td >
                        <h2>{$email}</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mensagem">Mensagem:</label>  
                    </td>
                    <td>
                        <textarea rows="5" cols="3"  name="mensagem" id="mensagem" ></textarea><br />
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>

                        <button type="button"  name="envia" id="envia" class="buttons">Enviar</button>
                    </td>
                </tr>
                     <tr>
                    <td>
                    </td>
                    <td>

                        <div id="resposta"></div>
                    </td>
                </tr>
            </form>
        </table>
        
    </body>
</html>
