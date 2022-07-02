<?php include 'includes/templates/header.php' ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="/build/img/nosotros.jpg" alt="imagen nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit numquam minus sit enim, sunt et, rem labore distinctio ullam, magni quos molestiae nobis est hic maxime temporibus nam ea quam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, impedit magnam? Adipisci, praesentium, mollitia quasi architecto quia nobis autem delectus facere repellendus est, facilis nisi. Maxime voluptates iste rem impedit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ea rem assumenda itaque deserunt laborum, reiciendis obcaecati soluta ullam perferendis similique illo exercitationem ipsa recusandae, dignissimos pariatur alias dicta molestias!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero enim commodi autem accusantium assumenda modi esse expedita molestias reprehenderit dignissimos magnam rem, itaque iure consequatur earum natus pariatur culpa.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="iconos">
                <img src="/build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure non id perspiciatis! Autem molestias, reiciendis recusandae a quibusdam enim cum. Nam eligendi obcaecati voluptate, consectetur id esse! Voluptate, fugit quaerat.</p>
            </div>
            <div class="iconos">
                <img src="/build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure non id perspiciatis! Autem molestias, reiciendis recusandae a quibusdam enim cum. Nam eligendi obcaecati voluptate, consectetur id esse! Voluptate, fugit quaerat.</p>
            </div>
            <div class="iconos">
                <img src="/build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure non id perspiciatis! Autem molestias, reiciendis recusandae a quibusdam enim cum. Nam eligendi obcaecati voluptate, consectetur id esse! Voluptate, fugit quaerat.</p>
            </div>

        </div>
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>

        <p class="copyright"><a target="_blank" href="https://www.donovan-webp.com">Donovan WebP</a> - Bienes Raices | Todos los derechos reservados. 2022 &copy;</p>
    </footer>


    <script src="/build/js/bundle.min.js"></script>
</body>
</html>