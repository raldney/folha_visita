<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$titulo}</title>
    </head>
    <body>

        <form action="login.php" method="post" id="form-contato"  width="800" align="center" >


            <label for="Usuario">Usuario:</label>
            <input type="text" class="width230" name="usuario" id="usuario"  />

            <label for="senha">Senha:</label>
            <input type="password" class="width230" name="senha" id="senha" />       

            <input type="submit" value="Enviar" name="enviar" id="enviar_contato" />


        </form>
        <p align="center"><a href="#">Cadastrar Usuario</a> | <a href="#">Esqueci a Senha</a> </p>
    </body>
</html>