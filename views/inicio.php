<?php
    include '../config/app.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubre el Mundo - Tu Guía de Viajes</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $url. 'public/resources/css/inicio.css?v=' .time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="<?php echo $url. 'public/resources/img/chacha.jpeg' ?>" alt="Turismo Inteligente">
                <h1>Turismo Inclusivo En Amazonas</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#sitios-turisticos">Sitios Turísticos</a></li>
                <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
            <div class="burger" aria-label="Menú de navegación">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(<?php echo $url. 'public/resources/img/chacha.jpeg' ?>)"></div>
                    <div class="swiper-slide" style="background-image: url(<?php echo $url. 'public/resources/img/fondo.png' ?>)"></div>
                    <div class="swiper-slide" style="background-image: url(<?php echo $url. 'public/resources/img/chacha.jpeg' ?>)"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="hero-content">
                <h2 class="animate-on-scroll">Bienvenido a tu próxima aventura</h2>
                <p class="animate-on-scroll">Descubre los destinos más fascinantes del mundo con nosotros</p>
                <a href="#sitios-turisticos" class="cta-button animate-on-scroll">Explorar Destinos</a>
            </div>
        </section>

        <section id="sitios-turisticos" class="featured-destinations">
            <h2 class="section-title">Sitios Turisticos Destacados</h2>
            <div class="destination-grid">
                <article class="destination-card">
                    <div class="card-image">
                        <img src="<?php echo $url. 'public/resources/img/kuelap.jpeg' ?>" alt="Fortaleza De Kuelap">
                    </div>
                    <div class="card-content">
                        <h3>Fortalezade Kuelap, Luya</h3>
                        <p class="description">Es el sitio arqueológico más emblemático de la región, una fortaleza preinca ubicada en la cima de una montaña que ofrece vistas impresionantes y una profunda conexión con la cultura Chachapoyas.</p>
                        <div class="card-meta">
                            <span class="meta-item"><i class="fa-solid fa-location-dot"></i> Luya, Luya, Amazonas</span>
                        </div>
                        <div class="card-actions">
                            <button class="btn btn-primary">Más información</button>
                            <button class="btn btn-secondary">Contenido similar</button>
                        </div>
                    </div>
                </article>
                <article class="destination-card">
                    <div class="card-image">
                        <img src="<?php echo $url. 'public/resources/img/gocta.jpeg' ?>" alt="Catarata De Gocta">
                    </div>
                    <div class="card-content">
                        <h3>Catarata De Gocta, Recta</h3>
                        <p class="description">Catarata de Gocta – Una de las cascadas más altas del mundo, con 771 metros de altura, rodeada de biodiversidad y accesible a través de rutas de senderismo. Es un atractivo destacado para los amantes de la naturaleza y la aventura.</p>
                        <div class="card-meta">
                            <span class="meta-item"><i class="fas fa-wine-bottle"></i> Recta, Bongara Amazonas</span>
                        </div>
                        <div class="card-actions">
                            <button class="btn btn-primary">Más información</button>
                            <button class="btn btn-secondary">Contenido similar</button>
                        </div>
                    </div>
                </article>
                <article class="destination-card">
                    <div class="card-image">
                        <img src="<?php echo $url. 'public/resources/img/quiocta.png' ?>" alt="Cavernas De Quiocta">
                    </div>
                    <div class="card-content">
                        <h3>Cavernas De Quiocta, Luya</h3>
                        <p class="description">Caverna de Quiocta – Un sistema de cuevas que contiene formaciones rocosas y estalagmitas, además de ser un lugar donde se han encontrado restos arqueológicos, ofreciendo una experiencia única en exploración.</p>
                        <div class="card-meta">
                            <span class="meta-item"><i class="fas fa-wine-bottle"></i> Lamud, Luya, Amazonas</span>
                        </div>
                        <div class="card-actions">
                            <button class="btn btn-primary">Más información</button>
                            <button class="btn btn-secondary">Contenido similar</button>
                        </div>
                    </div>
                </article>
                <article class="destination-card">
                    <div class="card-image">
                        <img src="<?php echo $url. 'public/resources/img/karajia.png' ?>" alt="Sarcofagos De Karajia">
                    </div>
                    <div class="card-content">
                        <h3>Sarcofagos De Karajía, Luya</h3>
                        <p class="description">Sarcófagos de Karajía – Estructuras funerarias de la cultura Chachapoyas, construidas en acantilados inaccesibles, representan una muestra singular de la ingeniería y la cosmovisión funeraria de la región .</p>
                        <div class="card-meta">
                            <span class="meta-item"><i class="fas fa-wine-bottle"></i> Luya, Luya, Amazonas</span>
                        </div>
                        <div class="card-actions">
                            <button class="btn btn-primary">Más información</button>
                            <button class="btn btn-secondary">Contenido similar</button>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section id="sobre-nosotros" class="about-us">
            <div class="about-us-container">
                <h2 class="section-title">Sobre Amazonas</h2>
                <div class="about-content">
                    <div class="about-text">
                        <p class="animate-on-scroll">El departamento de Amazonas, en Perú, se caracteriza por su riqueza cultural y natural. Ubicado en la región norte del país, alberga bosques tropicales, montañas y una impresionante biodiversidad. Su capital, Chachapoyas, es conocida por su arquitectura colonial y por ser la puerta de entrada a sitios arqueológicos como Kuélap, una antigua fortaleza construida por la civilización Chachapoya.</p>
                        <ul class="about-features">
                            <li class="animate-on-scroll"><a href=""><i class="fa-solid fa-hotel"></i> Sitios Para Hospedarse </a></li>
                            <li class="animate-on-scroll"><a href=""><i class="fa-solid fa-shield"></i> Seguridad </a></li>
                            <li class="animate-on-scroll"><a href=""><i class="fa-solid fa-bell-concierge"></i> Buffet Al Estilo Gurmet </a> </li>
                        </ul>
                    </div>
                    <div class="about-image animate-on-scroll">
                        <img src="<?php echo $url .'public/resources/img/amazonas.png' ?>" alt="Nuestro equipo en acción">
                    </div>
                </div>
                <h3 class="team-title">Nuestro Equipo</h3>
                <div class="team-grid">
                    <div class="team-member animate-on-scroll">
                        <div class="member-image">
                            <img src="https://source.unsplash.com/random/300x300/?woman" alt="Ana García">
                        </div>
                        <div class="member-info">
                            <h3>Javier Culqui Montoya</h3>
                            <p>lorem ipsun </p>
                            <p class="member-bio">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="team-member animate-on-scroll">
                        <div class="member-image">
                            <img src="https://source.unsplash.com/random/300x300/?man" alt="Carlos Rodríguez">
                        </div>
                        <div class="member-info">
                            <h3>Nayeli Fernandez Güimac</h3>
                            <p>lorem ipsun </p>
                            <p class="member-bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-section">
                <h3>¿Listo para tu próxima aventura?</h3>
                <p>Contáctanos y diseñaremos juntos el viaje de tus sueños.</p>
                <button id="open-contact-form" class="cta-button">Consultar Ahora</button>
            </div>
            <div id="contact-form-modal" class="modal">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <h3>Contáctanos</h3>
                    <form id="contact-form">
                        <input type="text" name="name" placeholder="Nombre" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="message" placeholder="Tu mensaje" required></textarea>
                        <button type="submit" class="submit-button">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Turismo Inclusivo Amazonas</h3>
                <p>Tu guía de confianza para explorar la magia del Amazonas de manera sostenible e inclusiva.</p>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Chachapoyas, Chachapoyas, Amazonas</p>
                    <p><i class="fas fa-phone"></i> +51 987 654 321</p>
                    <p><i class="fas fa-envelope"></i> info@turismoinclusivo-amazonas.com</p>
                </div>
            </div>
            <div class="footer-section links">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#destinos">Destinos</a></li>
                    <li><a href="#experiencias">Experiencias</a></li>
                    <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h3>Síguenos</h3>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section newsletter">
                <h3>Suscríbete a Nuestro Newsletter</h3>
                <form id="newsletter-form">
                    <input type="email" placeholder="Tu correo electrónico" required>
                    <button type="submit">Suscribirse</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-info">
                <p>&copy; 2024 Turismo Inclusivo Amazonas. Todos los derechos reservados.</p>
            </div>
            <div class="footer-links">
                <a href="#">Términos y Condiciones</a>
                <a href="#">Política de Privacidad</a>
                <a href="#">Accesibilidad</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo $url. 'public/resources/js/inicio.js?v=' .time(); ?>"></script>
</body>
</html>