<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>{$titulo}</title>
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="js/loginUsuario.js"></script>
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
                    <form action="login.php" method="post" id="form-login" align="center" >
                        <label for="Usuario">Usuario:</label>
                        <input type="text"  name="usuario" id="usuario"  />

                        <label for="senha">Senha:</label>
                        <input type="password"  name="senha" id="senha" /> <br>
                        <button id="loginButton" type="button" name="loginButton" class="buttons">Enviar</button> 
                    </form>
                     
                    <div id="resposta"></div>
                </td>
            </tr>
        </table>  

        <a href="cadastrar.php" class="buttons" style="margin-left: 600px ">Cadastrar Usuario</a>

    </body>
</html>