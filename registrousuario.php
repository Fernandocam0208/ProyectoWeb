<?php

    include 'conexion.php';

    $name = $_POST['nombre_completo'];
    $email = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo ,correo ,usuario, contrasena)
              VALUES('$name','$email','$usuario','$password')";

    //VERIFICAR EL CORREO NO SE REPITA

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$email' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
         alert("Correo ya existente");
         window.location="index.php"
        </script>
      ';
      exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
             <script>
             alert("Registro exitoso");
             window.location="index.php"
             </script>
        ';
    }else{
        echo '
              <script>
               alert("Usuario no  registrado");
               window.location="index.php"
              </script>
        ';
    }





?>