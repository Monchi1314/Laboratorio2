<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa5</title>
</head>
<body>
    <?php
    
      $califi1=$_GET["Calificacion1"];
      $califi2=$_GET["Calificacion2"];
      $califi3=$_GET["Calificacion3"];
      $califi4=$_GET["Calificacion4"];
      $califi5=$_GET["Calificacion5"];
      $nombre=$_GET["Nombre"];

      $promedio = ($califi1 + $califi2+ $califi3+ $califi4+ $califi5) / 5;
      echo "El nombre del Estudiante es :\n".$nombre;
      echo "<br>El promedio del Estudiante es :\n".$promedio;

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>