<?php
require_once("../../conexion/CONEXION.PHP");
session_start();
class Usuario extends Conexion{

    public function __construct()
    {
        $this ->db = parent::__construct();
    }
public function login($email, $password){
    $tabla = $this->db ->prepare("SELECT email, password FROM usuarios
    WHERE email = :email AND password = :password");
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':password', $password);
    $tabla->execute();

    //rowCount busca en la tabla una coincidencia si la encontro =1
    if($tabla->rowCount()==1) {
        $loginUsuario =$tabla->fetch();
        $_SESSION['email'] =$loginUsuario['email'];
        echo"Inicio de sesion Satisfactoria";
         }else{
             echo"Fallo al iniciar sesion. Verifique sus datos";
  }

}// end login
   public function insertarUsuario($nombres,$apellidos,$tipo_id,$numero_documento,$direccion,$telefono,$celular, $email ,$password, $id_rol){
                //prepare---->prepara la mconsulta SQL enviada ->insert into
                $tabla = $this->db->prepare("INSERT INTO usuarios (nombres, apellidos, tipo_id, numero_documento, direccion, telefono, celular, email , password, id_rol)
                 VALUE (:nombres,:apellidos,:tipo_id, :numero_documento, :direccion, :telefono, :celular, :email, :password, :id_rol)");
                 
                 $tabla->bindParam(':nombres',$nombres);
                 $tabla->bindParam(':apellidos',$apellidos);
                 $tabla->bindParam(':tipo_id',$tipo_id);
                 $tabla->bindParam(':numero_documento',$numero_documento);
                 $tabla->bindParam(':direccion',$direccion);
                 $tabla->bindParam(':telefono',$telefono);
                 $tabla->bindParam(':celular',$celular);
                 $tabla->bindParam(':email', $email);
                 $tabla->bindParam(':password',$password);
                 $tabla->bindParam(':id_rol', $id_rol);
                 
                if($tabla->execute()){
                    echo"Regitro usuario";
                    header('refresh:3; url=../vista/add.php');
                }else {
                    echo"Fallo en el Registro ";
                    header('refresch:2; url=../../Index.php');
                }
                
                //para identificar el ultimo registro
                
        }
        //VER TODOS LOS USUARIOS
        public function getUsuarios(){
            $rows = Null;
            $tabla = $this->db->prepare("SELECT id, nombre, email, password FROM usuario");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }

    }//and clase
    
?>

 