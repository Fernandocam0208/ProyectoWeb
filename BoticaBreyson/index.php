
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logopequeño.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/estilos.js" async></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>INKAFARMA | PRECIOS MAS BAJOS</title>
    <meta name="description" content="INKAFARMA, precios bajos para cuidar tu salud.">
</head>

<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Soporte al cliente</span>
                        <span class="number">123-456-7890</span>
                    </div>
                </div>

                <div class="container-logo">
                    <h1 class="logo"><a href="/">Salud Medic</a></h1>
                </div>

                <div class="container-user">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-basket-shopping" id="abrir-carrito"></i>
                    <div class="content-shopping-cart">
                        <span class="text">Carrito</span>
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
                <li><a class="icono-farmacia" href="login.php">Iniciar Sesion</a></li>
            </ul>
        </nav>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>
            <div class="carrito-items">

            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        S/0
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
            <i class='bx bxs-x-square' id="close-carrito"></i>
           
        </div>
    </header>

    <main>
        <div class="slider">
            <ul>
                <li><img src="https://images.ctfassets.net/l9x8e72nkkav/51zjWKWJL24SP79CtK2L9a/3800ea393bfb0ff149c8ce52929ca201/eucerin-dermo-inkafarma-slider-x2-web.jpg"
                        alt=""></li>
                <li><img src="https://images.ctfassets.net/l9x8e72nkkav/731qEDtTFtlkMyIPSj4ZZn/6f0e56ca4a0fb35c3ddb637b66baf2d6/Whatsapp-AON-inkafarma-slide__5_.jpg"
                        alt=""></li>
                <li><img src="https://images.ctfassets.net/l9x8e72nkkav/4SF6Ewikm3bQx22MGOce1i/9de2e6fdcf7ed6e9095f4a372e7bb477/cuidadoinfantil-promodia-inkafarma-slider-web.jpg"
                        alt=""></li>
                <li><img src="https://images.ctfassets.net/l9x8e72nkkav/2YIVdI9xbNB8oK1ottzQJi/701ad5cdb18426c4f13990338b9d3fc2/aclub_banner_web_slider_desktop__1___1_.png"
                        alt=""></li>
            </ul>
        </div>
        <section class="container top-products">
            <h3 class="heading-1">Ofertas de Farmacia</h3>
        </section>
        <section class="contenedor">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items">
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Panadol Antigripal NF Tableta</span>
                    <span class="precio-item">S/ 2.11</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Vitapyrena Forte Antigripal Sabor Miel y Limón - Caja 50 UN</span>
                    <span class="precio-item">S/ 2.34</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Vick Vaporub Ungüento tópico</span>
                    <span class="precio-item">S/ 2.49</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Abrilar EA 575 Jarabe</span>
                    <span class="precio-item">S/ 20.90</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Panadol Forte Tableta</span>
                    <span class="precio-item">S/ 1.73</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
            </div>
            <!-- Carrito de Compras -->

        </section>
        <section class="container top-products">
            <h3 class="heading-1">Oferta en productos para Bebes</h3>
        </section>
        <section class="contenedor">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items">

                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Shampoo Hask Argán Oíl - Frasco 355 ML</span>
                    <span class="precio-item">S/78.90</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Shampoo Hask Argán Oíl - Frasco 355 ML</span>
                    <span class="precio-item">S/78.90</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Shampoo Hask Argán Oíl - Frasco 355 ML</span>
                    <span class="precio-item">S/78.90</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Shampoo Hask Argán Oíl - Frasco 355 ML</span>
                    <span class="precio-item">S/78.90</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <img src="img/iphone.jpg" alt="" class="img-item">
                    <span class="titulo-item">Shampoo Hask Argán Oíl - Frasco 355 ML</span>
                    <span class="precio-item">S/78.90</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
            </div>
        </section>
    </main>


    <footer class="footer-container">
        <div class="links">
            <h4>Sobre Inkafarma</h4>
            <ul>
                <li><a href="">Catálogo del mes</a></li>
                <li><a href="">Boticas 24 horas</a></li>
                <li><a href="">Farmacia Vecina</a></li>
                <li><a href="">Apoyo al Paciente Inkafarma</a></li>
                <li><a href="">Productos Equivalentes</a></li>
                <li><a href="">Cannabis Medicinal</a></li>
                <li><a href="">Derechos Arco</a></li>
                <li><a href="">Intercorp y socios estrategicos</a></li>
                <li><a href="">Call Center - Términos y Condiciones</a></li>
                <li><a href="">Inkaclub</a></li>

            </ul>
        </div>
        <div class="links">
            <h4>Inkafarma Digital</h4>
            <ul>
                <li><a href="">Blog Inkafarma</a></li>
                <li><a href="">Legales de Campañas</a></li>
                <li><a href="">Retiro en Tienda</a></li>
                <li><a href="">Servicio Express</a></li>
                <li><a href="">Zonas de cobertura</a></li>
                <li><a href="">Términos y Condiciones Generales</a></li>
                <li><a href="">Politicas de privacidad</a></li>
                <li><a href="">Comprobante electrónico</a></li>
                <li><a href="">WhatsApp - Términos y Condiciones</a></li>
                <li><a href="">Terceros encargados de tratamiento</a></li>
            </ul>
        </div>
        <div class="links">
            <h4>Contáctanos</h4>
            <ul>
                <li><a href="">Preguntas Frecuentes</a></li>
                <li><a href="">Plan de Referidos</a></li>
                <li><a href="">Inkafono (Lima)</a></li>
                <li><a href="">(511) 314 2020</a></li>
            </ul>
        </div>
        <div class="links">
            <h4>Síguenos</h4>
            <div class="socials">
                <a href="https://inkafarma.pe/">
                    <div class="social">
                        <img src="img/simbolo-de-la--de-facebook.png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="social">
                        <img src="img/s2.svg" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="social">
                        <img src="img/s3.svg" alt="">
                    </div>
                </a>
            </div>
        </div>

    </footer>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>

</html>