<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
        <title>Untitled Document</title>
    </head>
    <body>
        <table id="organizador">
            <tr>
                <td  id="texto">
                    <h1>{$mensagem}</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="cadastrar.php" method="post" id="form-cadastrar"  width="800" align="center" >


                        <label for="Usuario">Usuario:</label>
                        <input type="text"  name="usuario" id="usuario"  />

                        <label for="Email">E-Mail:</label>
                        <input type="text"  name="email" id="email"  />

                        <label for="senha">Senha:</label>
                        <input type="password"  name="senha" id="senha" />       

                        <p><button type="submit" id="enviar" class="buttons" name="enviar" >Enviar</button> </p>


                    </form>
                </td>
            </tr>
        </table>

    </body>
</html>
