
$(document).ready(function() {

    $("#enviarButton").click(function() {

        var nome = $("#usuario").val();
        var email = $("#email").val();
        var website = $("#site").val();
        var senha = $("#senha").val();
        if (nome == "" || email == "" || website == "" || senha == "") {
            alert("12Preencha todos os campos!");
        } else {
            $(".loading").show();
            $.ajax({
                url: "php/cadastrarUsuario.php",
                data: 'nome=' + nome.val() + '&senha=' + senha.val() + '&email=' + email.val() + '&website=' + website.val(),
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
            });/*
             alert("Campos Preenchidos!");
             $.post('php/cadastrarUsuario.php',{
             nome:nome,
             email:email,
             website:website,
             senha:senha
             },function(retorno) {
             
             $("#resposta").html(retorno);
             if (retorno == "Inserido com Sucesso"){
             setTimeout("document.location = 'index.php'",500);
             }
             });*/
        }
    });

});