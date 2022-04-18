<?php 
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])) {
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $tipo_id=$_POST["tipo_id"];
        $numero_documento = $_POST["numero_documento"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $id_rol = $_POST["id_rol"];

        
        if(isset($modeloUsuario)){
            $modeloUsuario = new Usuario();

            $modeloUsuario->insertarUsuario($nombres,$apellidos,
            $tipo_id,$numero_documento,$direccion,$telefono,$celular, $email, $password, $id_rol);

            if ($id_rol=="1") {
            echo"Registro de usuario satisfactorio..";
            header('Location: ../vista/perfil.php'); 
            }
            
           
        }else{
            echo"Fallo al insertar registro..";
            header('refresh:2; url=../vista/');
        }
          
    }
?>

    ?>