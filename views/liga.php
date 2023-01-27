<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- las rutas de imágenes y archivos externos debe de utilizar la URL Root: EJ src="<?php echo __ROOT__ ?>/public/img/logo_whatsapp_1.png" -->

<main>  
    <section class="max-w-5xl md:mx-auto border border-yellow__text grid grid-cols-1 md:grid-cols-3 rounded-2xl my-10 md:my-20 mx-4">
        <div class="col-span-2 my-16 mx-10 text-white">
            <h2 class="text-4xl font-bold mb-4">La Liga de Futbol para Abogados</h2>
            <ul class="list-disc list-inside text-lg">
                <li class="mb-2"><b>Dirección:</b> AV BOSQUES, CP: 11100, CIUDAD DE MÉXICO</li>
                <li class="mb-2"><b>Edición:</b> 3ra</li>
                <li class="mb-2"><b>Rama:</b> Mixta</li>
                <li class="mb-2"><b>Formato:</b> Por grupos</li>
                <li class="mb-2"><b>Modalidad:</b> Futbol 7</li>

            </ul>
        </div>
        <div class="relative md:col-span-1">
            <img src="<?php echo __ROOT__; ?>/public/img/jugadorLiga.png" alt="jugador de golf" class="md:absolute bottom-0 max-w-sm md:max-w-lg mx-auto w-full">
        </div>
    </section>

    <section class="max-w-4xl mx-auto my-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/ligaQuienes.png" alt="jugador de futbol">
            <div class="text-white">
                <h3 class="text-4xl font-semibold mb-4">¿Quiénes somos?</h3>
                <p class="text-lg">
                Liga de fútbol para abogados es una empresa de reciente creación que se establece con el objetivo de ofrecer la mejor experiencia deportiva para nuestros clientes a través de un torneo de fútbol 7 que se preocupa por la salud y seguridad de nuestros participantes
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto my-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 text-white">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/vision.png" class="mx-auto">
                <div class="text-center">
                    <h2 class="text-2xl font-semibold my-2">Visión</h2>
                    <p>
                    Convertir la liga de abogados en la mejor y más grande liga de futbol 7 para abogados a nivel nacional y brindar el mejor servicio para nuestros clientes.
                    </p>
                </div>
            </div>
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/mision.png" class="mx-auto">
                <div class="text-center">
                    <h2 class="text-2xl font-semibold my-2">Misión</h2>
                    <p>
                    Promover la actividad física mediante una liga de fútbol y a su vez brindar diversión y seguridad para nuestros clientes
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto my-20">
        <h2 class="text-4xl font-bold mb-4 text-white text-center m-8">Tabla de Posiciones</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
            <select id="plantel" class="text-sm rounded-lg block w-full p-2.5">
                <option selected>Selecciona tu plantel</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
    
            <select id="liga" class="text-sm rounded-lg block w-full p-2.5">
                <option selected>Selecciona tu plantel</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
        </div>

        <div class="relative overflow-x-auto rounded-2xl">
            <table class="w-full text-sm text-left">
                <thead class="text-xs text-gray__light uppercase bg-white border-b border-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Equipo</th>
                        <th scope="col" class="px-6 py-3">PJ</th>
                        <th scope="col" class="px-6 py-3">PG</th>
                        <th scope="col" class="px-6 py-3">PE</th>
                        <th scope="col" class="px-6 py-3">PP</th>
                        <th scope="col" class="px-6 py-3">GF</th>
                        <th scope="col" class="px-6 py-3">GC</th>
                        <th scope="col" class="px-6 py-3">DG</th>
                        <th scope="col" class="px-6 py-3">PTS</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <th scope="row" class="px-6 py-4">
                            Equipo 1
                        </th>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-6 py-4">
                            Equipo 2
                        </th>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-6 py-4">
                            Equipo 3
                        </th>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-6 py-4">
                            Equipo 4
                        </th>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-6 py-4">
                            Equipo 5
                        </th>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-6 py-4">
                            Equipo 6
                        </th>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                        <td class="px-6 py-4">00</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </section>
    
    <?php include('components/nuestroClientes.php'); ?>

</main>

<?php include('partials/footer.php'); ?>