<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo/estilo.css" />
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="js/cadastrarUsuario.js"></script>
        <title>{$titulo}</title>
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
                    <form method="post" action="php/cadastrarUsuario.php " id="form-cadastrar"  width="800" align="center" >

                        <fieldset class="height290">
                            <p class="loading">{html_image file="Smarty/template/img/loading.gif"}&nbsp;<strong>Cadastrando...</strong></p>
                            <div id="resposta"></div>
                                                        <label for="Usuario">Usuario:</label>
                            <input type="text"  name="usuario" id="usuario"  />

                            <label for="Email">E-Mail:</label>
                            <input type="text"  name="email" id="email"  />

                            <label for="WebSite">WebSite:</label>
                            <input type="text"  name="site" id="site"  />

                            <label for="senha">Senha:</label>
                            <input type="password"  name="senha" id="senha" />  
                            <p><button type="button" id="enviarButton" class="buttons" name="enviar" >Enviar</button> </p>
                        </fieldset>
                        <a href="index.php" class="buttons" style="margin-left: 600px; ">Retornar</a>
                    </form>
                    
                </td>
            </tr>
        </table>

    </body>
</html>
