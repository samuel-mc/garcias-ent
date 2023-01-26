<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="max-w-7xl mx-auto relative min-h-400px">
        <img src="<?php echo __ROOT__; ?>/public/img/homeHero.png" alt="">
        <div class="absolute bottom-1/2 translate-y-1/2 p-6">
            <h4 class="text-yellow__text text-xl md:text-3xl">Garcia entertainment</h4>
            <h2 class="text-white text-2xl md:text-5xl font-bold mt-6 mb-10 max-w-3xl">Organizamos tus torneos con
                la mayor seriedad y compromiso
            </h2>
            <div class="my-10">
                <button class="m-2 bg-blue__md hover:bg-white text-white hover:text-blue__md transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                    Contáctanos
                </button>
                <button class="m-2 bg-transparent hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                    Conocer más
                </button>
            </div>
        </div>
    </section>
    <section class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center md:gap-20 p-4">
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/homeQSomos.png" class="mx-auto max-w-xs w-full">
        </div>
        <div class="text-white">
            <h6 class="text-yellow__text text-2xl">Acerca de nosotros</h6>
            <h4 class="text-3xl mt-1 mb-4">¿Quiénes somos?</h4>
            <p class="text-xl">
                Somos una Agencia de reciente creación, especializada en la organización de eventos deportivos,
                apoyo a atletas de alto rendimiento, charlas y congresos con especialistas en el ámbito deportivo.
            </p>
        </div>
    </section>
    <section class="max-w-5xl mx-auto my-10">
        <h2 class="text-white text-4xl font-semibold text-center mb-5">Nuestros servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
            <div class="rounded bg-blue__md p-6 text-white">
                <h4 class="text-2xl font-semibold mb-4 text-center">Relaciones públicas</h4>
                <p class="text-xl my-4">
                    Realización de campañas de Relaciones Públicas logrando posicionar atletas, eventos deportivos,
                    marcas y personalidades del ámbito deportivo.
                </p>
                <footer class="text-center">
                    <button class="bg-transparent mt-4 hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                        Ver más <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </footer>
            </div>
            <div class="rounded bg-blue__md p-6 text-white">
                <h4 class="text-2xl font-semibold mb-4 text-center">Eventos deportivos</h4>
                <p class="text-xl my-4">
                    Organización de eventos deportivos empresariales, logrando el objetivo del cliente. A su vez
                    fomentamos la actividad física y el deporte en México.
                </p>
                <footer class="text-center">
                    <button class="bg-transparent mt-4 hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                        Ver más <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </footer>
            </div>
            <div class="rounded bg-blue__md p-6 text-white flex flex-col justify-between">
                <div>
                    <h4 class="text-2xl font-semibold mb-4 text-center">Speakers</h4>
                    <p class="text-xl my-4">
                        Tenemos una gran variedad de speakers deportivos de diferentes ramas del deporte
                    </p>
                </div>
                <footer class="text-center">
                    <button class="bg-transparent mt-4 hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                        Ver más <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </footer>
            </div>
        </div>
    </section>
    <section class="max-w-6xl md:mx-auto border border-yellow__text grid grid-cols-1 md:grid-cols-3 rounded-2xl py-16 px-4 my-10 md:my-40 mx-4">
        <div class="relative md:col-span-1">
            <img src="<?php echo __ROOT__; ?>/public/img/homeConoce.png" alt="jugador de football" class="md:absolute md:bottom-1/2 md:translate-y-1/2 mx-auto max-w-xs w-full">
        </div>
        <div class="col-span-2">
            <h2 class="text-4xl text-white font-bold">Conoce nuestra <span class="text-yellow__text">Liga de fútbol
                    para
                    abogados.</span>
            </h2>
            <button class="bg-transparent mt-4 hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                Ver más <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </section>
    <section class="max-w-6xl mx-auto p-4">
        <h2 class="text-white text-4xl font-semibold text-center mb-5">Eventos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/homeEventos1.png" alt="jugadores de futbol" class="mx-auto">
                <h4 class="text-white text-xl font-semibold my-4">Liga de Abogados - Final Apertura 2022</h4>
                <h5 class="bg-yellow__text text-md w-fit rounded py-1 px-4 mx-auto">13 Jun 2022</h5>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/homeEventos2.png" alt="jugadores de futbol" class="mx-auto">
                <h4 class="text-white text-xl font-semibold my-4">Liga de Abogados - Final Clausura 2022</h4>
                <h5 class="bg-yellow__text text-md w-fit rounded py-1 px-4 mx-auto">14 Nov 2022</h5>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/homeEventos3.png" alt="jugador de golf" class="mx-auto">
                <h4 class="text-white text-xl font-semibold my-4">1er Torneo de Golf para
                    Abogados- 2023 (proximamente)</h4>
                <h5 class="bg-yellow__text text-md w-fit rounded py-1 px-4 mx-auto">Julio 2023</h5>
            </div>
        </div>
        <div class="text-center">
            <button class="bg-transparent mt-4 hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                Ver más <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </section>

    <section>
        <h2 class="text-white text-4xl font-semibold text-center my-5">Nuestros clientes</h2>
        <div class="bg-white my-5">
            <div class="max-w-6xl mx-auto grid grid-cols-4 sm:grid-cols-5 md:grid-cols-8 items-center justify-items-center gap-2 py-8 px-4">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente1.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente2.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente3.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente4.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente5.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente6.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente7.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente8.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente9.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente10.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente11.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente12.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente13.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente14.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente15.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente16.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente17.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente18.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente19.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente20.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente21.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente22.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente23.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente24.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente25.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente26.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente27.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente28.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente29.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente30.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente31.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente32.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente33.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente34.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente35.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente36.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente37.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente38.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente40.png" alt="">
                <img src="<?php echo __ROOT__; ?>/public/img/clientes/cliente41.png" alt="">
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto p-4 grid grid-cols-1 sm:grid-cols-2">
        <div class="text-white p-4">
            <div class="mb-5">
                <h2 class="text-3xl font-bold mb-4">¿Por qué contratarnos para tu evento?</h2>
                <ul class="text-lg list-disc">
                    <li>Ahorraras tiempo</li>
                    <li>Disfrutaras sin estrés todas las experiencias</li>
                    <li>Estaremos dentro de tu presupuesto</li>
                    <li>Estaremos mano a mano en la planeación para que todo salga como quieres</li>
                    <li>Monitoreamos todo de principio a fin generando confianza a todos nuestros clientes</li>
                </ul>
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4">¿Por qué somos la mejor opción?</h2>
                <ul class="text-lg list-disc">
                    <li>
                        Somos más de 550 usuarios semanalmente que les brindamos la mejor experiencia deportiva,
                        esto habla del gran compromiso de nuestra organización con nuestros clientes
                    </li>
                    <li>Organizamos eventos deportivos en el tiempo establecido por el cliente lo cual habla de
                        nuestra excelente organización y gran equipo de trabajo</li>
                    <li>Nuestro equipo de trabajo tiene más de 5 años de experiencia acumulada en la organización de
                        eventos deportivos a nivel nacional e internacional</li>
                </ul>
            </div>
        </div>
        <img src="<?php echo __ROOT__; ?>/public/img/homePorque.png" alt="jugador de golf" class="max-w-sm w-full mx-auto">
    </section>

</main>

<?php include 'partials/footer.php'; ?>