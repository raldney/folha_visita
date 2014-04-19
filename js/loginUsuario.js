
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
        $(".loading").show();
        $.ajax({
            url: "php/loginUsuario.php",
            data: 'nome=' + usuario.val() + '&senha=' + senha.val(),
            type: 'POST',
            context: jQuery('#resposta'),
            success: function(retorno) {
                $(".loading").fadeOut(200);

                $("#resposta").html(retorno).fadeIn(2000);
                if (retorno == "Logado com Sucesso") {
                    setTimeout("document.location = 'livro.php'", 500);
                }
                $("#resposta").fadeOut(200);

            }
        });
    }
}
