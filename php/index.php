<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv = "X-UA-Compatible" content = "IE =edge">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Nabla&family=Teko:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
<div class="game">
    <!-- pagina de inicio -->
    <main>
    <h1>FELIPA</h1>
    <div class="dados">
        <img class="img-dado" src="./img/dado1.png" id="face_1" alt="dado">
        <img class="img-dado" src="./img/dado2.png" id="face_2" alt="dado">
        <img class="img-dado" src="./img/dado3.png" id="face_3" alt="dado">
    </div>
    <button type="submit" class="btn btn-info">TIRAR!</button>
    </main>

    <!-- panel primario lateral -->
<div class="sidebarrr offcanvas offcanvas-end fade show" data-bs-backdrop="static" >
        <div class="offcanvas-header">
        <h3 class="offcanvas-title title" id="offcanvasRightLabel">Jugadores</h3>
        </div>
        <!-- button -->
        <div class="button-players mb-3" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-players btn-info" for="btnradio2">1</label>
        
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-players btn-info" for="btnradio3">2</label>

            <input type="radio" class=" btn-players btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn  btn-players btn-info" for="btnradio1">3</label>
        </div>
        <!-- form -->
        <form method="post" action = "form.php">
        <div class="content-form">
        <div class="form">
            <div class="mb-5">
            <label for="formGroupExampleInput" class=" form-label">Jugador 1</label>
            <input  type="text" name="p1" class="focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2 form-control" id="formGroupExampleInput" placeholder="Ingresa tu nombre jugador">
            </div>
            <div class="mb-5">
            <label for="formGroupExampleInput2" class=" form-label">Jugador 2</label>
            <input  type="text" name="p2" class="focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2 form-control" id="formGroupExampleInput2" placeholder="Ingresa tu nombre jugador">
            </div>
            <div class="mb-5">
            <label for="formGroupExampleInput2" class="  form-label">Jugador 3</label>
            <input  type="text" name="p3" class="focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2 form-control" id="formGroupExampleInput2" placeholder="Ingresa tu nombre jugador">
            </div>
            <button name="play" type="submit" class="btn btn-info">Jugar!</button>
        </div>
        </div>
    </div>
    </div>

<!-- panel secundario lateral
<div class="sidebarrr offcanvas offcanvas-end fade show" data-bs-backdrop="static" >
    <div class="offcanvas-header">
    <h3 class="offcanvas-title title" id="offcanvasRightLabel">JUEGO DE DADOS</h3>
    </div>

    <div class="button-players mb-3" aria-label="Basic radio toggle button group">
    <label for="formGroupExampleInput" class=" form-label">Jugador 1</label>
    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
    <label class="btn btn-players btn-info" for="btnradio2">1</label>

    <label for="formGroupExampleInput" class=" form-label">Jugador 2</label>
    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
    <label class="btn btn-players btn-info" for="btnradio3">54</label>

    <label for="formGroupExampleInput" class=" form-label">Jugador 3</label>
    <input type="radio" class=" btn-players btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
    <label class="btn  btn-players btn-info" for="btnradio1"></label>
    </div>

    <div class="content-form">
    <div class="form">
        <div class="mb-5">
        
        <input type="text" class="focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2 form-control" id="formGroupExampleInput" placeholder="Ingresa tu nombre jugador">
        </div>
        <div class="mb-5">
        <label for="formGroupExampleInput2" class=" form-label">Jugador 2</label>
        <input type="text" class="focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2 form-control" id="formGroupExampleInput2" placeholder="Ingresa tu nombre jugador">
        </div>
        <div class="mb-5">
        <label for="formGroupExampleInput2" class="  form-label">Jugador 3</label>
        <input type="text" class="focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2 form-control" id="formGroupExampleInput2" placeholder="Ingresa tu nombre jugador">
        </div>
        <button type="submit" class="btn btn-info">Jugar!</button>
    </div>
    </div>
</div>
</div> -->


</div>

        </form>
<!-- Script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
include ("form.php")
?>
</body>
</html>