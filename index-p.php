<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('herencia/class/class-alumno.php');
    $alumno = new Alumno('Matias','Alicata', 28, 'Masculino', 'Ing en Sistemas', '20232023', 70);

    //echo $alumno->getNombre();
    //$alumno->cancelarClase();
    $alumno->matricular();
    $alumno->aprobar();
    $alumno->reprobar();

    //interfaces aplicar herencias multiples. 
    //Pilares de POO: Encapsulacion, Herencia, Polimorfismo
    ?>
</body>
</html>