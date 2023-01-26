<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<main>
    <section class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center md:gap-20 p-4">
        <div class="text-white">
            <h6 class="text-yellow__text text-2xl">Acerca de nosotros</h6>
            <h4 class="text-3xl mt-1 mb-4">Somos una Agencia Deportiva</h4>
            <p class="text-lg">
                Especializada en la organización de eventos deportivos, apoyo a atletas de alto rendimiento, charlas y congresos con especialistas en el ámbito deportivo.
            </p>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/aboutHero.png" class="mx-auto max-w-xs w-full">
        </div>
    </section>
    <section class="max-w-5xl md:mx-auto rounded-lg border border-yellow__text p-8 mx-4 my-10">
        <h2 class="text-white text-4xl font-semibold mb-5">Nuestros clientes</h2>
        <div class="text-white">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p>
                    Enero 2022: Creación de la La Liga de Fútbol para Abogados en la Ciudad de México con la presencia de 20 Despachos (equipos) en nuestra 1er edición.
                </p>
                <p>
                    Julio 2022: Segunda edición de la La Liga de Fútbol para Abogados con la presencia de 26 Despachos (equipos) en nuestra 2da edición
                </p>
            </div>
            <h2 class="text-2xl font-semibold my-5">Proximamente</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <ul class="list-disc list-inside ">
                    <li>Enero 2023: Tercera edición de la La Liga de Fútbol para Abogados con la presencia de 39 Despachos (equipos) en nuestra 3ra edición.</li>
                    <li>Julio 2023: 1er Torneo Anual de Golf para Despachos de Abogados by GARCIA ENTERTAINMENT con la participación de más de 40 despachos de abogados.</li>
                </ul>
                <ul class="list-disc list-inside ">
                    <li>2023: 1er Torneo Anual de Futbol entre Facultades de Derecho de todas las universidades tanto Públicas y Privadas de la Ciudad de México y Estado de México</li>
                </ul>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/mision.png" class="mx-auto">
                    <div class="text-center">
                        <h2 class="text-2xl font-semibold my-2">Misión</h2>
                        <p>
                            Garantizamos calidad, eficacia y eficiencia en todos nuestros productos y servicios. Nuestro compromiso: Darles a todos nuestros clientes la mejor experiencia deportiva, fomentando el deporte en México y generando un impacto global en el proceso.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/vision.png" class="mx-auto">
                    <div class="text-center">
                        <h2 class="text-2xl font-semibold my-2">Visión</h2>
                        <p>
                            Ser la compañía líder en la organización de eventos deportivos a nivel empresarial, ofreciendo la mejor experiencia deportiva por medio de nuestros eventos deportivos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('partials/footer.php'); ?>