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
    include_once('class/class-maestro.php');

    $alumno = new Alumno('Matias','Alicata', 28, 'Masculino', 'Ing en Sistemas', '20232023', 70);
    $maestro = new Maestro('Pedro','Chan', 40, 'Masculino', 'Ing en Sistemas', '20232023', 10, 10000, "matutino");

    //echo $alumno->getNombre();
    //$alumno->cancelarClase();
    $maestro->matricular();
    $alumno->matricular();
    $alumno->aprobar();
    $alumno->reprobar();

    //interfaces aplicar herencias multiples. 
    //Pilares de POO: Encapsulacion, Herencia, Polimorfismo
    ?>
</body>
</html>