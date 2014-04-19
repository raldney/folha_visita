
$(document).ready(function() {

    $("#loginButton").click(function() {

        validaLogin($("#usuario"), $("#senha"));

    });

});

function validaLogin(usuario, senha) {

    if (usuario.val() == "") {
        alert("Informe o login!");
        usuario.focus();
        return;
    }
    else if (senha.val() == "") {
        alert("Informe a senha!");
        senha.focus();
        return;
    }

    else {


        $("#resposta").html("Autenticando...");

        $.post("php/loginUsuario.php", {nome: usuario.val(), senha: senha.val()},
        function(retorno) {

            //Insere na DIV #resultado o que foi retornado pelas classes de manipulação do Usuário (Se os dados estão corretos ou não)

            $("#resposta").html(retorno);
            if (retorno == "Logado com Sucesso"){
            setTimeout("document.location = 'livro.php'",500);
        }
        } //function(retorno)
        ); //$.post()

    }

} //validaLogin()