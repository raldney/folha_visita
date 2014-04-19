
$(document).ready(function() {

    $("#cadastrarButton").click( function() {

        var nome = $("#usuario").val();
        var email = $("#email").val();
        var website = $("#site").val();
        var senha = $("#senha").val();
        if (nome == "" || email == "" || website == "" || senha == ""){
            alert("Preencha todos os campos!");
        }else{
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
        });
    }
    });

});