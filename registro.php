<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
    <link rel="stylesheet" href="librerias/jquery-ui-1.12.1/jquery-ui.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Registro de usuario</h1>
        <hr>
        <div class="row">
            <div class="col sm-4"></div>
            <div class="col sm-4">
                <form action="" id="frmRegistro" method="post" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" require="">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" require="" readonly="">
                    <label for="">Email o correo</label>
                    <input type="email" name="correo" id="correo" class="form-control" require="">
                    <label for="">Nombre de usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" require="">
                    <label for="">Password o Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" require="">
                    <br>
                    <div class="row">
                        <div class="col sm-6 text-left">
                            <button class="btn btn-primary">Registrar</button>
                        </div>
                        <div class="col sm-6 text-right">
                            <a href="index.php" class="btn btn-success">Login</a>
                        </div>
                    </div>
                    
                    
                </form>
            </div>
            <div class="col sm-4"></div>
        </div>
    </div>

    <script src="librerias/jquery-3.6.0.min.js"></script>
    <script src="librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="librerias/sweetalert.min.js"></script>

    <script>
        $(function(){
            var fechaA = new Date();
            var yyyy = fechaA.getFullYear();
            $("#fechaNacimiento").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: '1900:' + yyyy,
                dateFormat: "yy-mm-dd"
            });
        });



        function agregarUsuarioNuevo(){
            $.ajax({
               method: "POST",
               data: $("#frmRegistro").serialize(),
               url: "procesos/usuario/registro/agregarUsuario.php",
               success:function(respuesta){
                    respuesta = respuesta.trim();

                    if(respuesta == 1){
                        $("#frmRegistro")[0].reset();
                        swal(":)","Agregado con exito!!!","success");
                    }else if(respuesta == 2){
                        swal("Este usuario ya existe, por favor escribe otro");
                    }else{
                        swal(":(","Fallo al agregar!!!","error");
                    }
                }
            });
            return false;
        }
    </script>
</body>
</html>