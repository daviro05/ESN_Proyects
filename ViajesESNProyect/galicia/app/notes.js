
function leerPuntuacion(id){
    console.log(id);
    $.ajax({
       url: "ver.php?coordi="+id,
       type: "post",
       data: "data",
       success: function(data){
           $("#mensajes_"+id).html(data);
       }
    });
}