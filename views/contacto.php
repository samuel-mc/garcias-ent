<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- las rutas de imágenes y archivos externos debe de utilizar la URL Root: EJ src="<?php echo __ROOT__ ?>/public/img/logo_whatsapp_1.png" -->

<main>
    <section class="max-w-6xl md:mx-auto border border-yellow__text rounded-2xl my-10 md:my-20 mx-4">
        <h2 class="text-4xl font-bold mb-4 text-white text-center m-8">Contactanos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mx-6 mt-12 mb-10 md:mb-20">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d838.114830520919!2d-99.20361701169423!3d19.412042628805096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201eed563ef6f%3A0x94c9757fe14ad2ce!2sAv.%20Bosques%2C%2011000%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1675048238898!5m2!1ses-419!2smx" 
                style="height: 100%; width: 100%; border-radius: 32px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <!-- <img src="<?php echo __ROOT__; ?>/public/img/mapa.png" alt="jugador de golf" class="max-w-sm md:max-w-lg mx-auto w-full rounded-3xl"> -->
            <form class="bg-white p-12 rounded-3xl text-gray__light">
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
                        <img src="<?php echo __ROOT__; ?>/public/img/iconTel.png" alt="">
                        <div>
                            <p class="ml-2 text-sm">Si necesitas contactarnos:</p>
                            <b class="text-dark__blue">+55 54 32 04 23</b>
                        </div>
                    </div>
                    <button class="bg-dark__blue mt-4 hover:bg-white text-white hover:text-blue__md border transition-all duration-500 md:text-xl font-semibold h-fit py-3 px-6 rounded-lg">
                        Enviar mensaje
                    </button>
                </div>
            </form>


        </div>
    </section>
    
</main>

<?php include('partials/footer.php'); ?>