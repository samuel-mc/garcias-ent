<heaer class="bg-blue__md py-2 hidden lg:block">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8 flex-col md:flex-row justify-between lg:flex">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="">
        <nav>
            <ul class="flex text-white text-xl items-center h-full">
                <li class="mx-5"><a href="">Inicio</a></li>
                <li class="mx-5"><a href="">Acerca de nosotros</a></li>
                <li class="mx-5"><a href="">Servicios</a></li>
                <li class="mx-5"><a href="">Torneos y ligas deportivas</a></li>
            </ul>
        </nav>

        <button class="bg-white hover:bg-dark__blue hover:text-white transition-all duration-500 text-xl font-bold h-fit py-3 px-6 rounded-lg my-auto">
            Contacto
        </button>
    </div>
</heaer>

<header class="bg-blue__md py-2 lg:hidden w-full">
    <div class="text-right">
        <button class="text-white p-2 text-2xl" onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h-screen hidden fixed z-10 top-0 bg-blue__md w-full" id="mobileMenu">
    <div class="flex flex-col justify-between px-4 py-8">
        <div class="text-right p-4">
            <button class="text-white text-2xl" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-20">
        <div class="my-10">
            <ul class="flex text-white text-xl flex-col">
                <li class="my-3"><a href="">Inicio</a></li>
                <li class="my-3"><a href="">Acerca de nosotros</a></li>
                <li class="my-3"><a href="">Servicios</a></li>
                <li class="my-3"><a href="">Torneos y ligas deportivas</a></li>
            </ul>
        </div>

        <button class="bg-white w-fit hover:bg-dark__blue hover:text-white transition-all duration-500 text-xl font-bold h-fit py-3 px-6 rounded-lg my-auto">
            Contacto
        </button>
    </div>
</nav>