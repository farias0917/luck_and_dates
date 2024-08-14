
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- ENLAZAR ESTILOS CSS -->
    <link rel="stylesheet" href="vista/css/styles.css">
    <link rel="stylesheet" href="vista/css/principal.css">
</head>
<body>

    <!-- ICONO FIJO DE WHASTAPP VERDE-->
    <a href="https://web.whatsapp.com/" target="_blank"><img src="vista/img/whatsapp-static.png" alt="" class="static_whastapp_img"></a>
    <header class="container">
        

         <!-- REDES SOCIALES -->
        <div class="redes_sociales">
            <img src="vista/img/facebook.png" alt="">
            <img src="vista/img/whatsapp.png" alt="">
            <img src="vista/img/instagram.png" alt="">
        </div>

        <!-- MENÚ DE NAVEGACIÓN -->
        <nav>
            <img src="vista/img/logo.jfif" alt="Logo">
            <div class="links">
                <a href="index.html">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#contacto">Contacto</a>
                <a href="#contacto">Citas</a>
            </div>

            <div class="link_login">
                <a href="vista/cliente/login.php">Ingresar</a>
            </div>
        </nav>
    </header>

    <!-- BANNER -->
    <div class="banner container">
        <div class="banner_info">
            <h1>Mejores cortes con el mejor <span>estilo</span></h1>
            <button>Más</button>
        </div>
        <div class="banner_img">
            <img src="vista/img/logo.jfif" alt="">
        </div>
    </div>

    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#E13386" fill-opacity="1" d="M0,192L48,208C96,224,192,256,288,256C384,256,480,224,576,224C672,224,768,256,864,250.7C960,245,1056,203,1152,197.3C1248,192,1344,224,1392,240L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>

    <!-- IMAGENES DE LOS CORTES O CARDS -->
    <div class="cuts_container">
    
        <div class="cuts_card_container container">

            <!-- CARD 1 -->
            <div class="cuts_card">
                <img src="vista/img/corte1.png" alt="">
            </div>

            
            <!-- CARD 2 -->
            <div class="cuts_card">
                <img src="vista/img/corte2.jpg" alt="">
            </div>

            
            <!-- CARD 3 -->
            <div class="cuts_card">
                <img src="vista/img/corte3.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="nosotros_container container">
        <h2 id="nosotros">Nosotros</h2>
        <p class="texto_nosotros">Somos una empresa dedicada al estilo y belleza masculina, con mas de 10 años de experiencia trayendo los mejores cortes y estilos para nuestros clientes.</p>

        <div class="mision_vision_container">
            <div class="card">
                <h2>Mision</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, asperiores vero. Adipisci maiores quas quae nihil repudiandae distinctio at non atque modi libero aliquid illum eius ipsum, vero nisi! Laudantium?</p>
            </div>

            <div class="img_container">
                <img src="vista/img/mision.png" alt="Mision">
            </div>
        </div>

        <div class="mision_vision_container">
            <div class="img_container">
                <img src="vista/img/vision.png" alt="Mision">
            </div>

            <div class="card">
                <h2>Visión</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, asperiores vero. Adipisci maiores quas quae nihil repudiandae distinctio at non atque modi libero aliquid illum eius ipsum, vero nisi! Laudantium?</p>
            </div>
        </div>
    </div>

    <div class="contacto_container">
        <h2 id="contacto">Contacto</h2>
        <div class="contacto_content container">
            <div class="contacto_card_info">
                <h2>Información de contacto</h2>
                <div class="info">
                    <img src="vista/img/llamar.png" alt="">
                    <p>3202457645</p>
                </div>

                <div class="info">
                    <img src="vista/img/correo.png" alt="">
                    <p>3202457645</p>
                </div>
            </div>
            <div class="contacto_card_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63634.328019838475!2d-74.08844799999999!3d4.5678592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1723500722654!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <footer>
        <img src="vista/img/logo.jfif" alt="">
        <h2>La mejor barberia</h2>
        <p>Juan Farías  | copyright© 2024</p>
    </footer>
</body>
</html>