<?php
include("conexion.php");
if(isset($_POST['formulario__register'])){
    if(
        strlen($_POST['nombre_completo']) >=1 &&
        strlen($_POST['correo']) >=1 &&
        strlen($_POST['usuario']) >=1 &&
        strlen($_POST['contrasena']) >=1 
        ){
            $name = trim($_POST['nombre_completo']);
            $email = trim($_POST['correo']);
            $direction = trim($_POST['usuario']);
            $password = trim($_POST['contrasena']);
            $consulta = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena)
                VALUES('$name','$email','$direction','$password')";    
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="sucess"> Tu registro se a completado</h3>    
                <?php
            }else{
                ?>
                    <h3 class="error">Ocurrio un error</h3>
                <?php    
            }
        }else{
            ?>
                <h3 class="error">Llena todos los campos</h3>
            <?php   }
}
?>