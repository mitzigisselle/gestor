<?php
    session_start();
    require_once "../../clases/Conexion.php";
    $idUsuario = $_SESSION['idUsuario'];
    $conexion = new Conectar();
    $conexion = $conexion->conexion();

?>


<div class="table-resposive">
    <table class="table table-hover table-dark" id="tablaCategoriasDataTable">
        <thead>
            <tr style="text-aling: center;">
                <td>Nombre</td>
                <td>Fecha</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            
        </thead>
        <tbody>

        <?php
           $sql = "SELECT id_categoria,
                          nombre,
                          fechaInsert
                    FROM t_categorias
                    WHERE id_usuario = '$idUsuario'"; 
            $result = mysqli_query($conexion, $sql);

            while($mostrar = mysqli_fetch_array($result)){
               $idCategoria = $mostrar['id_categoria'];
        ?>    

            <tr style="text-aling: center;">
                <td><?php echo $mostrar['nombre']; ?></td>
                <td><?php echo $mostrar['fechaInsert']; ?></td>
                <td >
                    <span class="btn btn-warning btn-sm" 
                            onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')"
                            data-toggle="modal" data-target="#modalActualizarCategoria">
                        <span class="fas fa-edit"></span>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger btn-sm" 
                            onclick="eliminarCategorias('<?php echo $idCategoria ?>')">
                        <span class="fas fa-trash-alt"></span>
                    </span>
                </td>
            </tr>
            <?php
                    
            }
            ?>
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function(){
        $('#tablaCategoriasDataTable').DataTable();
    });
</script>