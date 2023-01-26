<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<main>
    <section class="max-w-5xl md:mx-auto border border-yellow__text grid grid-cols-1 md:grid-cols-3 rounded-2xl my-10 md:my-20 mx-4">
        <div class="col-span-2 my-16 mx-10">
            <h2 class="text-4xl text-white font-bold mb-4">Eventos deportivos
            </h2>
            <p class="text-white text-lg">
                Organización de eventos deportivos empresariales, logrando el objetivo del cliente. A su vez fomentamos la actividad física y el deporte en México.
            </p>
        </div>
        <div class="relative md:col-span-1">
            <img src="<?php echo __ROOT__; ?>/public/img/relacionesHero.png" alt="jugador de golf" class="md:absolute bottom-0 max-w-sm md:max-w-lg mx-auto w-full">
        </div>
    </section>
    <section class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-4 gap-4 p-4">
        <div class="flex text-white items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/1.png" style="height:45px" alt="numero uno" class="mr-4">
            <h4 class="text-xl">Vemos tus necesidades</h4>
        </div>
        <div class="flex text-white items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/2.png" style="height:45px" alt="numero dos" class="mr-4">
            <h4 class="text-xl">Escogemos el lugar perfecto</h4>
        </div>
        <div class="flex text-white items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/3.png" style="height:45px" alt="numero tres" class="mr-4">
            <h4 class="text-xl">Logística (antes, durante y después)</h4>
        </div>
        <div class="flex text-white items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/4.png" style="height:45px" alt="numero cuatro" class="mr-4">
            <h4 class="text-xl">Entre otras</h4>
        </div>
    </section>
    <section class="max-w-4xl mx-auto my-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/eventos1.png" alt="jugador de futbol">
            <div class="text-white">
                <h3 class="text-4xl font-semibold mb-4">Torneos deportivos empresariales</h3>
                <ul class="list-disc list-inside text-lg">
                    <li class="mb-2">Futbol</li>
                    <li class="mb-2">Golf</li>
                    <li class="mb-2">Basquetbol</li>
                    <li class="mb-2">Beisbol</li>
                    <li class="mb-2">Entre otros</li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center my-20">
            <div class="text-white">
                <h3 class="text-4xl font-semibold mb-4">Olimpiadas empresariales</h3>
                <p class="text-lg">
                    Actividades de integración que buscan hacer
                    un evento de competencia y diversión por medio
                    de actividades deportivas.
                </p>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/eventos2.png" alt="jugador de futbol">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/eventos3.png" alt="jugador de futbol">
            <div class="text-white">
                <h3 class="text-4xl font-semibold mb-4">Congresos, talleres, cursos y diplomados</h3>
                <p class="text-lg">
                    Organizamos congresos, talleres, cursos, diplomados enfocados en el ámbito deportivo
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center my-20">
            <div class="text-white">
                <h3 class="text-4xl font-semibold mb-4">Representación de atletas</h3>
                <p class="text-lg">
                    Te ayudamos a encontrar la marca perfecta con la que
                    tengas sinergia para cualquier competencia nacional e
                    internacional
                </p>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/eventos2.png" alt="jugador de futbol">
        </div>
    </section>
    <?php include('components/nuestroClientes.php'); ?>

</main>

<?php include('partials/footer.php'); ?>