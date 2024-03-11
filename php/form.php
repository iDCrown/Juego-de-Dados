<?php

include("connect.php");

if (isset($_POST['play'])) {

    
    if (
        strlen($_POST['p1']) >= 1 &&
        strlen($_POST['p2']) >= 1 &&
        strlen($_POST['p3']) >= 1 




    ) {

        $p1 = trim($_POST['p1']);
        $p2 = trim($_POST['p2']);
        $p3  = trim($_POST['p3']);
        $fecha = date("d/m/y");
        $consulta = " INSERT INTO datos(p1, p2, p3, fecha) 
                    VALUES ('$p1', '$p2', '$p3', '$fecha')";
        $res = mysqli_query($conex, $consulta);
        
        if($consulta){
            ?>
                <h3 class="access">COMENCEMOS</h3>
            <?php    
        }else {
            ?>

                <h3 class="error"></h3>
            <?php    
        }

    
    } else { ?> <h3 class ="Error">No se puede dejar vacio el campo</h3><?php}

}
?>