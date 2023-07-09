<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('class/ClassUsuario.php');
        $objeto = new Usuario("Matias", "Alicata", "17/02/1995", "masculino");
        //$objeto->setNombre("Matias");
        //$objeto->setApellido("Alicata");

        //echo "<h1>".$objeto->getNombre()." ". $objeto->getApellido()."</h1>"
        echo "<h1>$objeto</h1>"
    ?>
</body>
</html>