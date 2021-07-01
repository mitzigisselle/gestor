<?php 
    session_start();

    if(isset($_SESSION['usuario'])) {
        include "header.php";
?>

        <div class="container">
            <div class="row">
                <div class="col">
                </div>
            </div>
        </div>
<?php

        include "fooder.php";
    }else{
        header("location:../index.php");
    }

?>

  