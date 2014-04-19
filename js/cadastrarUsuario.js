
$(document).ready(function() {

    $("#enviarButton").click(function() {


        validaCadastro($("#usuario"), $("#email"), $("#site"), $("#senha"))

    });
    function validaCadastro(nome, email, website, senha) {
        if (nome.val() == "" || email.val() == "" || website.val() == "" || senha.val() == "") {
            alert("Preencha todos os campos!");
        } else {
            $(".loading").show();
            $.ajax({
                url: "php/cadastrarUsuario.php",
                data: 'nome=' + nome.val() + '&email=' + email.val() + '&website=' + website.val() + '&senha=' + senha.val(),
                type: 'POST',
                context: jQuery('#resposta'),
                success: function(retorno) {
                    $(".loading").fadeOut(200);

                    $("#resposta").html(retorno).fadeIn(2000);
                    if (retorno == "Cadastrado com Sucesso") {
                        $("#resposta").fadeOut(200);
                        setTimeout("document.location = 'index.php'", 1500);
                    }
                    $("#resposta").fadeOut(200);

                }
            });
        }
    }

});