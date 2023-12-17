


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Inkafarma | Registro</title>
</head>

<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Soporte al cliente</span>
                        <span class="number">123-456-789</span>
                    </div>
                </div>

                <div class="container-logo">
                    <h1 class="logo"><a href="/">Salud Medic</a></h1>
                </div>

                <div class="container-user">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-basket-shopping"></i>
                    <div class="content-shopping-cart">
                        <span class="text">Carrito</span>
                        <span class="number">(0)</span>
                    </div>
                </div>
            </div>
        </div>
        <nav class="menu container">
            <input type="checkbox" id="menu">
            <label for="menu" class="menu-icon">
                <img src="img/bars-solid.svg" class="menu-icon" alt="">
            </label>
            <ul class="navbar">
                <li><a href="index.php">Inicio</a>
                <li><a href="#">Categorias</a>
                    <ul>
                        <li><a href="" target="_blank">Inka Packs</a></li>
                        <li><a href="">Farmacia</a></li>
                        <li><a href="">Salud</a></li>
                        <li><a href="">Mamá y Bebé</a></li>
                        <li><a href="">Nutricion para Todos</a></li>
                        <li><a href="">Cuidado Personal</a></li>
                    </ul>
                </li>
                <li><a href="#">Farmacia</a></li>
                <li><a href="#">Dermocosmetica</a></li>
                <li><a href="bebe.html">Bebe</a></li>
                <li><a class="icono-farmacia" href="#">Cuidado Personal</a></li>
                <li><a class="icono-farmacia" href="Nosotros.html">Nosotros</a></li>
            </ul>


        </nav>

    </header>


    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="logear.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña"  name="contrasena" >
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="registrousuario.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button >Regístrarse</button>
                  
                </form>
            </div>
        </div>

    </main>

    <script src="js/login.js"></script>
</body>

</html>