<?php include "header.php"; ?>

    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Gestor de archivos</h1>
        <div id="tablaGestorArchivos"></div>
    </div>
    </div>



<?php include "fooder.php"; ?>


<script>
    $(document).ready(function(){
        $('#tablaGestorArchivos').load("gestor/tablaGestor.php");
    });
</script>