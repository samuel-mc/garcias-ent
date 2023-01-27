<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- las rutas de imágenes y archivos externos debe de utilizar la URL Root: EJ src="<?php echo __ROOT__ ?>/public/img/logo_whatsapp_1.png" -->

<main>  
    <section class="max-w-5xl md:mx-auto border border-yellow__text grid grid-cols-1 md:grid-cols-3 rounded-2xl my-10 md:my-20 mx-4">
        <div class="col-span-2 my-16 mx-10">
            <h2 class="text-4xl text-white font-bold mb-4">Speakers</h2>
            <p class="text-white text-lg">
            Tenemos una gran variedad de speakers deportivos de diferentes ramas del deporte
            </p>
        </div>
        <div class="relative md:col-span-1">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesHero.png" alt="jugador de golf" class="md:absolute bottom-0 max-w-sm md:max-w-lg mx-auto w-full">
        </div>
    </section>

    <section class="max-w-4xl mx-auto my-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/eventos1.png" alt="jugador de futbol">
            <div class="text-white">
                <h3 class="text-4xl font-semibold mb-4">Charlas presenciales o virtuales</h3>
                <ul class="list-disc list-inside text-lg">
                    <li class="mb-2">Especialistas en todos los deportes</li>
                    <li class="mb-2">Futbolistas</li>
                    <li class="mb-2">Boxeadores</li>
                    <li class="mb-2">Golfistas</li>
                    <li class="mb-2">Atletas olímpicos y paralímpicos</li>
                    <li class="mb-2">Entre otros</li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center my-20">
            <div class="text-white">
                <h3 class="text-4xl font-semibold mb-4">Capacitación</h3>
                <p class="text-lg">
                Tenemos especialistas en diferentes áreas del deporte que los ayudarán a capacitar a todo su equipo de trabajos.
                </p>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/eventos2.png" alt="jugador de futbol">
        </div>
    </section>
    <?php include('components/nuestroClientes.php'); ?>

</main>

<?php include('partials/footer.php'); ?>