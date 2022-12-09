<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa13</title>
</head>
<body>
    <?php

    $personas=$_GET["Personas"];
    if ($personas > 200 and $personas <= 300){
        $presupuesto = $personas * 100.00;
        echo "El Coste Total por la cantidad de persona es de : \n".$presupuesto;
    }elseif($personas > 300){
        $presupuesto = $personas * 60.00;
        echo "El Coste Total por la cantidad de persona es de : \n".$presupuesto;
    }else{
        $presupuesto = $personas * 50.00;
        echo "El Coste Total por la cantidad de persona es de : \n".$presupuesto;
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>