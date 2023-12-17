<?php
    session_start();
    include("conexion.php");


    $email = $_POST['correo'];
    $password = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$email' and contrasena = '$password' ");
  

    if (mysqli_num_rows($validar_login) > 0) {
            header("location: index.php");
            exit;
    }else{
        echo '
            <script>
                   alert("Usuario no existe");
                   window.location="login.php"
            </script>
            ';
            exit;
    }
?>