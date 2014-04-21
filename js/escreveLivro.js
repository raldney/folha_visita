
$(document).ready(function() {

    var pagina = pag();
    escrever(pagina);

});
function pag() {
    var endereco = location.href;
    var endPag = endereco.split('=');
    var pag = endPag.pop();
    if (endPag != "") {
        return pag;
    } else {
        return 0;
    }
}
function escrever(pag) {
    $.ajax({
        data: 'pag=' + pag,
        type: 'POST',
        url: "php/livro.php",
        context: jQuery('#postagens'),
        success: function(retorno) {
            $(".loadingBar").fadeOut(200);
            $("#postagens").html(retorno);
        },
    });
}






