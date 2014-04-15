<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>{$titulo}</title>
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
    </head>
    <body>

        <form action="login.php" method="post" id="form-contato" >


            <label for="Usuario">Usuario:</label>
            <input type="text" class="width230" name="usuario" id="usuario"  />

            <label for="senha">Senha:</label>
            <input type="password" class="width230" name="senha" id="senha" />       

            <input type="submit" value="Enviar" name="enviar" id="enviar_contato" />


        </form>
        <p ><a href="cadastrar.php">Criar Usuario</a> </p>
    </body>
</html>