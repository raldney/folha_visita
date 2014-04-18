
$(document).ready(function() {

    $("#loginButton").click(function() {

        validaLogin($("#usuario"), $("#senha"));

    });

});

function validaLogin(usuario, senha) {

    if (usuario.val() == "") {
        alert("Informe o login!");
        login.focus();
        return;
    }
    else if (senha.val() == "") {
        alert("Informe a senha!");
        senha.focus();
        return;
    }

    else {


        $("#resposta").html("Autenticando...");

        $.post("login.php", {usuario: usuario.val(), senha: senha.val()},
        function(retorno) {

            //Insere na DIV #resultado o que foi retornado pelas classes de manipulação do Usuário (Se os dados estão corretos ou não)

            $("#resposta").html(retorno);
            setTimeout("document.location = 'livro.php'",500);
        } //function(retorno)
        ); //$.post()

    }

} //validaLogin()