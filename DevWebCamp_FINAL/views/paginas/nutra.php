<main class="nutra">
    <h2 class="nutra__heading"><?php echo $titulo; ?></h2>
    <p class="nutra__descripcion">Conoce a nuestros profesionales en la Nutrición</p>

    <div class="nutra__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebcamp">
            </picture>
        </div>

        <div  class="nutra__contenido">
            <p <?php aos_animacion(); ?> class="nutra__texto">En Nutra, entendemos que la salud y el bienestar son una prioridad. Nuestra misión es brindar apoyo integral a nutricionistas y pacientes a través de herramientas tecnológicas avanzadas que faciliten la gestión de citas y el registro de información.</p>
            
            <p <?php aos_animacion(); ?> class="nutra__texto">Ya sea que seas un nutricionista buscando mecanizar tu práctica o un paciente en busca de apoyo en tu camino hacia una vida más saludable, estamos aquí para ayudarte.</p>
        </div>
    </div>
</main>