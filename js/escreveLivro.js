
$(document).ready(function() {
    $(".anterior").click(function() {
      alert($(".anterior").html());
   });
    $.ajax({
        url: "php/livro.php",
        data:'pag='+ $(".anterior").val(),
        type: 'post',
        context: jQuery('#postagens'),
        success: function(retorno) {
            $(".loadingBar").fadeOut(200);
            $("#postagens").html(retorno);
        }
    });
});






