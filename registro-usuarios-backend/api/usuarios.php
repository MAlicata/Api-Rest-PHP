<?php 
    //localhost:8080/...../api/usuarios.php 
   
    //Crear
    //Obtener un usuario
    //Obtener todos los usuarios
    //Actualizar un usuario
    //Eliminar un Usuario
    
    //Recibir peticiones del usuario
    // file_get_contents: recibe el json del cliente
    //echo 'Informacion' . file_get_contents('php://input');

    header("Content-Type: application/json");
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'), true);
            //echo "Guardar el usuario" .$_POST['nombre'];
            $resultado["mensaje"] = "Guardar usuario, informacion: ". json_encode($_POST);
            echo json_encode($resultado);
        break;
        case 'GET':
            //http://localhost/Api-Rest-PHP/registro-usuarios-backend/api/usuarios.php?id=111
            //echo "Parametro GET: ". $_GET['id'];
            if(isset($_GET['id'])){
                $resultado["mensaje"] = "Retornar el usuario con el id: " . $_GET['id'];
                echo json_encode($resultado);
            }
            else{
                $resultado["mensaje"] = "Retornar todos los usuarios";
                echo json_encode($resultado);
            }
        break;
        case 'PUT':
            $_PUT = json_decode(file_get_contents('php://input'), true);
            $resultado["mensaje"] = "Actualizar un usuario con el id" .$_GET['id'].
                                    ", Informacion a actualizar: ".json_encode($_PUT);
            echo json_encode($resultado);
        break;
        case 'DELETE':
            $resultado["mensaje"] = "Eliminar un usuario con el id: ".$_GET['id'];
            echo json_encode($resultado);
        break;
    }


    
?>