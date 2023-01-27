<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- las rutas de imágenes y archivos externos debe de utilizar la URL Root: EJ src="<?php echo __ROOT__ ?>/public/img/logo_whatsapp_1.png" -->

<main>
    <section class="max-w-5xl md:mx-auto border border-yellow__text rounded-2xl my-10 md:my-20 mx-4">
        <h2 class="text-4xl font-bold mb-4 text-white text-center m-8">Contactanos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mx-6 mt-12 mb-10 md:mb-20">
            <img src="<?php echo __ROOT__; ?>/public/img/mapa.png" alt="jugador de golf" class="max-w-sm md:max-w-lg mx-auto w-full rounded-2xl">
            <form class="bg-white p-4 rounded-2xl text-gray__light">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-6">
                        <label for="nombre" class="block mb-2 text-sm font-medium">NOMBRE</label>
                        <input type="text" id="nombre" class="border border-gray-300 rounded-lg block w-full p-2.5" placeholder="Escribe tu nombre..." required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium">CORREO ELÉCTRONICO</label>
                        <input type="email" id="email" class="border border-gray-300 rounded-lg block w-full p-2.5" placeholder="Escribe tu correo..." required>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-6">
                        <label for="servicio" class="block mb-2 text-sm font-medium">SERVICIO</label>
                        <input type="text" id="servicio" class="border border-gray-300 rounded-lg block w-full p-2.5" placeholder="Escribe tu nombre..." required>
                    </div>
                    <div class="mb-6">
                        <label for="tel" class="block mb-2 text-sm font-medium">TU NÚMERO DE TELÉFONO</label>
                        <input type="text" id="tel" class="border border-gray-300 rounded-lg block w-full p-2.5" placeholder="Escribe tu correo..." required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium">MENSAJE</label>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300" placeholder="Escribe aquí tu mensaje..."></textarea>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-6 flex gap-x-2 items-center">
                        <i class="fa-solid fa-phone-volume text-white bg-dark__blue p-4 rounded-2xl flex items-center"></i>
                        <div>
                            <p class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si necesitas contactarnos:</p>
                            <h2>+55 54 32 04 23</h2>
                        </div>
                    </div>
                    <button class="bg-dark__blue mt-4 hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                        Enviar mensaje <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </form>


        </div>
    </section>
    
</main>

<?php include('partials/footer.php'); ?>