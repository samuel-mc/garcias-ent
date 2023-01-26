<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<main>
    <section class="max-w-5xl md:mx-auto border border-yellow__text grid grid-cols-1 md:grid-cols-3 rounded-2xl my-10 md:my-20 mx-4">
        <div class="col-span-2 my-16 mx-10">
            <h2 class="text-4xl text-white font-bold mb-4">Relaciones públicas
            </h2>
            <p class="text-white text-lg">
                Realización de campañas de Relaciones Públicas logrando posicionar atletas, eventos deportivos, marcas y personalidades del ámbito deportivo.
            </p>
        </div>
        <div class="relative md:col-span-1">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesHero.png" alt="jugador de golf" class="md:absolute bottom-0 max-w-sm md:max-w-lg mx-auto w-full">
        </div>
    </section>
    <section class="max-w-6xl mx-auto my-10">
        <h2 class="text-white text-4xl font-semibold text-center mb-5">Nuestras herramientas</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-4">
            <div class="rounded bg-blue__md p-6 text-white">
                <h4 class="text-2xl font-semibold mb-4 text-center">Medios</h4>
                <ul class="text-lg my-4 list-disc list-inside">
                    <li>Conferencia de prensa</li>
                    <li>Entrevistas</li>
                    <li>Gira de medios</li>
                </ul>
            </div>
            <div class="rounded bg-blue__md p-6 text-white">
                <h4 class="text-2xl font-semibold mb-4 text-center">Contenido web</h4>
                <ul class="text-lg my-4 list-disc list-inside">
                    <li>Newsletter</li>
                    <li>Redes sociales</li>
                    <li>Blogs</li>
                </ul>
            </div>
            <div class="rounded bg-blue__md p-6 text-white">
                <h4 class="text-2xl font-semibold mb-4 text-center">Networking</h4>
                <ul class="text-lg my-4 list-disc list-inside">
                    <li>Alianzas comerciales</li>
                    <li>Patrocinios</li>
                </ul>
            </div>
            <div class="rounded bg-blue__md p-6 text-white">
                <h4 class="text-2xl font-semibold mb-4 text-center">Influencer</h4>
                <ul class="text-lg my-4 list-disc list-inside">
                    <li>Talento deportivo</li>
                    <li>Especialistas deportivos</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="max-w-6xl mx-auto my-10">
        <h2 class="text-white text-4xl font-semibold text-center mb-5">Galería</h2>
        <div class="grid grid-cols-1 sm:grid-cols-10 gap-6 p-4">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesGaleria1.png" class="object-fill mx-auto sm:col-span-4 aspect-video w-full rounded-lg h-full">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesGaleria2.png" class="object-fill mx-auto sm:col-span-2 w-full rounded-lg h-full">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesGaleria3.png" class="object-fill mx-auto sm:col-span-4 aspect-video w-full rounded-lg h-full">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesGaleria4.png" class="object-fill mx-auto sm:col-span-2 w-full rounded-lg h-full">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesGaleria5.png" class="object-fill mx-auto sm:col-span-4 aspect-video w-full rounded-lg h-full">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesGaleria6.png" class="object-fill mx-auto sm:col-span-4 aspect-video w-full rounded-lg h-full">
        </div>
    </section>
    <?php include('components/nuestroClientes.php'); ?>
</main>

<?php include('partials/footer.php'); ?>