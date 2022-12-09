<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa2</title>
</head>
<body>
    <div>
    <?php
    $nu1=$_GET["n1"];
    $nu2=$_GET["n2"];
    $suma=$nu1+$nu2;
    $resta=$nu1-$nu2;
    $multiplicacion=$nu1*$nu2;
    $division=$nu1/$nu2;
    echo "La Suma es de : ". $suma;
    echo "<br>La Resta es de : ". $resta;
    echo "<br>La Multiplicacion es de : ". $multiplicacion;
    echo "<br>La Division es de : ". $division;
    ?>    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>