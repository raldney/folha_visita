
$(document).ready(function() {


    $('html').keyup(function(e) {
        var max = parseInt($("#max").html());
        if (e.keyCode == 8 && max < 140)
            $("#max").html(max + 1);
    });
    $("#mensagem").keypress(function() {
       
        limita('mensagem');
    });
    $("#escrever").click(function() {
        if ($("#mensagem").val() == "") {
            alert("Digite uma mensagem!");
            mensagem.focus();
            return;
        } else {
            postar($("#mensagem"));
        }
    });
});
function postar(msg) {
    $(".loading").show();
    $(".loadingBar").show();
    $.ajax({
        url: "php/postarLivro.php",
        data: 'mensagem=' + msg.val(),
        type: 'POST',
        context: jQuery('#postagens'),
        success: function(retorno) {
            $(".loading").hide();
            $(".loadingBar").fadeOut(200);
            $("#postagens").html(retorno).fadeIn(3000);
        }
    });
}
function limita(textarea) {

    var tamanho = document.form_postar[textarea].value.length;
    $("#max").html(140 - tamanho);
    var texto = document.form_postar[textarea].value;
    var linha = tamanho / 42 + 1;
    if (tamanho <= 139) {
        if (tamanho == 41 * parseInt(linha)) {
            document.form_postar[textarea].value = texto.substring(0, (41 * parseInt(linha))) + "\n";
            alert(parseInt(linha));
        }

    } else {
        document.form_postar[textarea].value = texto.substring(0, 139);
    }

    return true;
}


