<x-app-layout>

    <section class="bg-white relative p-10 h-[28rem] z-10 overflow-hidden container mx-auto">

        <h1 class="uppercase font-bold mb-4 text-2xl md:text-4xl lg:text-5xl">¡Nútrete hoy!</h1>
        <p class="montserrat-400 mb-4 md:max-w-[500px]">En Icatali ofrecemos alimentos que se caracterizan por ser altos
            en proteína de
            origen vegetal digerible, avalados con estudios científicos.Nuestro objetivo principal es ofrecer productos
            atractivos, nutritivos y accesibles para que el consumidor pueda elegir fácilmente opciones sanas. y sobre
            todo reconociendo todos sus ingredientes</p>
        <div class="mb-4">
            <p><strong>Haga sus pedidos</strong></p>
            <p><strong>5532110142</strong></p>
        </div>
        <button class="bg-black rounded-full px-4 py-2 ml-5">
            <a class="text-white uppercase font-bold bebas-400" href="">Contactanos</a>
        </button>
        <img class="absolute w-40 -left-24 lg:left-[55%] xl:left-[63%] -bottom-20 lg:bottom-[40%] xl:bottom-[47%]"
            src="{{ asset('img/decoraciones/circulo-radial.svg') }}" alt="">
        <div
            class="absolute bg-black  w-48 md:w-72 lg:w-80 h-48 md:h-72 lg:h-80 rounded-[50%] -skew-x-[8deg] lg:-skew-x-0 -right-12 lg:right-16 -bottom-16 lg:bottom-16 overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ asset('img/barras_de_amaranto.JPG') }}" alt="">
        </div>
    </section>

    <section class="relative bg-white z-20 p-10 container mx-auto">
        <h2 class="text-3xl bebas-400 font-semibold uppercase text-center underline bebas">5 beneficios de las legumbres
        </h2>
        <div class="flex justify-center items-center">
            <ul class="text-lg p-3 list-image-checkmark">
                <li>Mejoraran la salud</li>
                <li>Son cultivos limpios</li>
                <li>Larga vida util</li>
                <li>Cero desperdicio</li>
                <li>Favorecen el crecimiento de otros cultivos</li>
            </ul>
            <div
                class="hidden md:flex  md:mt-10 bg-[url('../../../icatali/public/img/decoraciones/fondo-productos-verde-2.svg')] bg-no-repeat bg-contain w-60 h-56 items-center justify-center mb-3">
                <img class="w-44" src="{{ asset('img/productos/producto-hamburguesa.png') }}" alt="">
            </div>
        </div>
    </section>
    <section
        class="relative bg-nube-azul md:bg-[url('../../../icatali/public/img/decoraciones/nube-desktop-inicio.svg')] bg-no-repeat bg-cover bg-left px-10 py-20 mx-auto flex justify-center  items-center gap-10">
        <div class="max-w-[800px]">
            <h2 class="text-4xl bebas font-semibold uppercase pb-4">Conoce icatali</h2>
            <p>Nos especializamos en el diseño y desarrollo de alternativas de consumo de origen vegetal, destacando por
                su
                calidad y accesibilidad. Nuestra misión es ser aliados en la nutrición, brindando confianza al
                consumidor al
                proporcionar productos con ingredientes que promueven la salud del cuerpo y del planeta. Utilizamos
                materias
                primas sostenibles que ofrecen nutrientes con un bajo impacto ambiental.</p>
            <p>Nuestros productos son validados sensorialmente por los consumidores y se caracterizan por tener un
                índice glucémico bajo, fibra, así como un etiquetado limpio y veraz. Aunque reconocemos que cada persona
                es
                única, aseguramos que los beneficios de nuestros productos siempre estarán presentes, gracias a nuestra
                adaptación a los nuevos estilos de vida y tipos de dieta, como la restrictiva (por enfermedad), plant
                based,
                veganos, vegetarianos, flexivegetarianos, plant forward, entre otros.</p>
            <p>Nos esforzamos por ser la elección confiable y saludable para aquellos que buscan una alternativa
                consciente y deliciosa en sus opciones de consumo</p>
        </div>
        <img class="hidden lg:block w-64 h-64" src="{{ asset('img/decoraciones/cestas-semillas.png') }}" alt="">
    </section>

    <section class="relative bg-white z-20 p-10 container mx-auto">
        <h2 class="text-4xl bebas font-semibold uppercase pb-4 text-center">Productos</h2>
        <div class="flex flex-col md:flex-row items-center justify-between gap-14">
            <div class="text-center pt-4">
                <img class="mx-auto" src="{{ asset('img/hamburguesa.png') }}" alt="">
                <h3 class="text-xl font-bold pt-4">Hamburguesas</h3>
            </div>
            <div class="text-center pt-4">
                <img class="mx-auto" src="{{ asset('img/hotcakes.png') }}" alt="">
                <h3 class="text-xl font-bold pt-4">Hotcakes</h3>
            </div>
            <div class="text-center pt-4">
                <img class="mx-auto" src="{{ asset('img/galletas.png') }}" alt="">
                <h3 class="text-xl font-bold pt-4">Galletas</h3>
            </div>
        </div>
    </section>

    <div class="bg-nube-verde bg-no-repeat bg-cover bg-top py-20 container mx-auto">
        <h2 class="text-xl bebas-400 font-semibold uppercase text-center relative top-4">¿QUÉ DICE LA GENTE DE ICATALI?
        </h2>
    </div>

    <div class="lg:flex justify-between items-center gap-5 max-w-[1000px] mx-auto hidden">
        @foreach ($comentarios as $comentario)
            <div class="bg-white flex flex-col justify-center items-center border-t-[1.5rem]
        border-t-red-700  border-x-2 border-x-red-700 border-b-4 border-b-red-700
        px-14 py-5 container mx-auto max-w-[400px]">
                <img class="w-60" src="{{ asset('img/female-user.png') }}" alt="">
                <p><strong>{{$comentario->alias}}</strong></p>
                <p>{{$comentario->comentario}}</p>
            </div>
        @endforeach
    </div>


    <div id="default-carousel" class="relative w-full lg:hidden" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[30rem] overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="bg-white flex flex-col justify-center items-center border-t-[1.5rem]
                    border-t-red-700  border-x-2 border-x-red-700 border-b-4 border-b-red-700
                    px-14 py-5 container mx-auto max-w-[400px]">
                    <img class="w-60" src="{{ asset('img/female-user.png') }}" alt="">
                    <p>Las galletas me encantan; su dulzura es adecuad, son suaves y no me es suficiente tres cuando la
                        combino con café. La uso como refrigerio con la convicción de que son saludables. Rosario</p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="bg-white flex flex-col justify-center items-center border-t-[1.5rem]
                    border-t-blue-700 border-x-2 border-x-blue-700 border-b-4 border-b-blue-700
                    px-14 py-5 container mx-auto max-w-[400px]">
                    <img class="w-60" src="{{ asset('img/female-user.png') }}" alt="">
                    <p>Las galletas me encantan; su dulzura es adecuad, son suaves y no me es suficiente tres cuando la
                        combino con café. La uso como refrigerio con la convicción de que son saludables. Rosario</p>
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="bg-white flex flex-col justify-center items-center border-t-[1.5rem]
                    border-t-green-900 border-x-2 border-x-green-900 border-b-4 border-b-green-900
                    px-14 py-5 container mx-auto max-w-[400px]">
                    <img class="w-60" src="{{ asset('img/female-user.png') }}" alt="">
                    <p>Las galletas me encantan; su dulzura es adecuad, son suaves y no me es suficiente tres cuando la
                        combino con café. La uso como refrigerio con la convicción de que son saludables. Rosario</p>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>



</x-app-layout>
