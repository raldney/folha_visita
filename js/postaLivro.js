
$(document).ready(function() {
   
    $("#envia").click(function() {
        
        var msg = $("#mensagem").val();
         if (msg == "") {
        alert("Digite uma mensagem!");
        mensagem.focus();
        return;
    } else {
        $.ajax({
            url: "postarLivro.php",
            data: 'mensagem=' + msg,
            type: 'POST',
            context: jQuery('#resposta'),
            success: function(retorno){
                
                $("#resposta").html(retorno);
            }
        }); 
    }
       
        
    });

});



