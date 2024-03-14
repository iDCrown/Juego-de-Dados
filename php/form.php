<?php

include("connect.php");

if (isset($_POST['play'])) {

    echo "Formulario enviado";
    
    if (
        strlen($_POST['p1']) >= 1 &&
        strlen($_POST['p2']) >= 1 &&
        strlen($_POST['p3']) >= 1 




    ) {

        $p1 = trim($_POST['p1']);
        $p2 = trim($_POST['p2']);
        $p3  = trim($_POST['p3']);
        $fecha = date("d/m/y");
        echo "p1: " . $p1 . "<br>";
        echo "p2: " . $p2 . "<br>";
        echo "p3: " . $p3 . "<br>";
        $consulta = " INSERT INTO datos(p1, p2, p3, fecha) 
                    VALUES ('$p1', '$p2', '$p3', '$fecha')";
        $res = mysqli_query($conex, $consulta);

        // Verificar si la consulta se ejecutó correctamente
        if ($res) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conex);
        }
        
        
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