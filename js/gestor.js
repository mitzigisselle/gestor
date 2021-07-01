function agregarArchivosGestor(){
    var formData = new FormData(document.getElementById('frmArchivos'));
    $.ajax({
        url:"../procesos/gestor/guardarArchivos.php",
        type:"POST",
        datatype:"html",
        data: formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(respuesta){
            respuesta = respuesta.trim();

            if(respuesta == 1){
                $('#tablaGestorArchivos').load("gestor/tablaGestor.php");
                swal(":)", "Agregado con exito", "success");
            }else{
                swal(":(", "Fallo al agregar", "error");
            }
        }
    });
}