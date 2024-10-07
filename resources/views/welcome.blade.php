<x-app-layout>

    @section('title', 'Bienvenido a Icatali')

    <section class="bg-white relative p-5 md:p-10  md:h-[28rem] z-10 overflow-hidden container mx-auto pt-4 sm:pt-16">

        <h1 class="uppercase font-bold mb-4 text-2xl md:text-4xl lg:text-5xl">¡Nútrete hoy!</h1>
        <p class="montserrat-400 mb-4 md:max-w-[500px]">
            En Icatali, nos especializamos en ofrecer alimentos con un alto contenido de proteína vegetal de alta
            digestibilidad, respaldados por estudios científicos. Nuestro objetivo principal es proporcionar productos
            atractivos, nutritivos y precio competitivo, permitiendo al consumidor elegir opciones saludables de manera
            sencilla, y con un claro reconocimiento de todos sus ingredientes.
        </p>
        <button class="bg-black rounded-full px-6 py-2">
            <a class="text-white uppercase font-bold bebas-400" href="https://wa.link/aw9lcl" target="_blank">Pedidos</a>
        </button>
        {{-- <img class="absolute w-40 -left-24 lg:left-[55%] xl:left-[63%] -bottom-20 lg:bottom-[40%] xl:bottom-[47%]"
            src="{{ asset('img/decoraciones/circulo-radial.svg') }}" alt=""> --}}
        <div
            class="hidden md:block absolute  h-40 md:h-72 lg:h-96  lg:right-28 md:bottom-8 right-6 lg:bottom-16 overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ asset('img/flor_icatali.png') }}" alt="">
        </div>
        <img class="w-36 absolute lg:top-[70%] lg:right-[49%] hidden lg:block"
            src="http://icatali.com/img/decoraciones/ovalos-verdes.svg" alt="">
        {{-- <img class="w-12 absolute top-[4%] lg:top-[7%] right-[9%] lg:right-[25%]"
            src="{{ asset('img/decoraciones/semillas-1.svg') }}" alt=""> --}}
        {{-- <img class="w-8 absolute top-[75%] lg:top-[70%] right-[38%] lg:right-[71%]"
            src="{{ asset('img/decoraciones/semillas-2.svg') }}" alt=""> --}}
    </section>

    <img class="block md:hidden h-full object-contain w-36 mx-auto" src="{{ asset('img/flor_icatali.png') }}"
        alt="">

    <section class="relative bg-white z-20 p-10 container mx-auto">
        <h2 class="text-3xl bebas-400 font-semibold uppercase text-center bebas">5 beneficios de las legumbres
        </h2>
        <div class="flex justify-center items-center">
            <ul class="text-lg p-3 list-image-checkmark">
                <li>Mejoran la salud</li>
                <li>Son cultivos limpios</li>
                <li>Larga vida útil</li>
                <li>Cero desperdicio</li>
                <li>Favorecen el crecimiento de otros cultivos</li>
            </ul>
            <div
                class="hidden md:flex md:mt-10 bg-[url('../../../icatali/public/img/decoraciones/fondo-productos-verde-2.svg')] bg-no-repeat bg-contain w-60 h-56 items-center justify-center mb-3">
                <img class="w-64 rounded-3xl" src="{{ asset('img/semillas_listado.png') }}" alt="">
            </div>
        </div>
    </section>
    <section
        class="relative bg-nube-azul md:bg-[url('../../../icatali/public/img/decoraciones/nube-desktop-inicio.svg')] lg:bg-[url('../../../icatali/public/img/decoraciones/nube-inicio-desktop-1.svg')] bg-no-repeat bg-cover bg-left px-10 py-20 mx-auto flex justify-center  items-center gap-10 lg:h-[39rem]">
        <div class="max-w-[800px]">
            <h2 class="text-4xl bebas font-semibold uppercase pb-4">Conoce icatali</h2>
            <p>Nos especializamos en diseñar y desarrollar alternativas vegetales de alta calidad y precios
                competitivos. Nuestra misión es promover la salud del cuerpo y del planeta con productos sostenibles y
                de bajo impacto ambiental. Ofrecemos alimentos con bajo índice glucémico, alta fibra y etiquetado claro,
                adaptados a diversos estilos de vida y planes alimenticios, además son validados sensorialmente por los
                consumidores. Nos esforzamos por ser la opción confiable y saludable para quienes buscan consumo
                consciente y delicioso</p>
        </div>
        <img class="hidden lg:block w-64 h-64" src="{{ asset('img/conoce-icatali.png') }}" alt="">
    </section>

    <section class="relative bg-white z-20 p-10 container mx-auto">
        <a href="{{ route('productos.index') }}">
            <h2 class="text-4xl bebas font-semibold uppercase pb-4 text-center hover:underline">Productos</h2>
        </a>
        <div class="flex flex-col md:flex-row items-center justify-between gap-14">
            @foreach ($productos as $producto)
                <a href="{{ route('productos.show', $producto) }}">
                    <div class="text-center pt-4 hover:shadow-md p-2 rounded-md">
                        <div class="relative hover-trigger"> <!-- Añadir clase 'hover-trigger' aquí -->
                            <img class="mx-auto rounded-full h-56 w-56 darken-on-hover" src="{{ $producto->image_der }}"
                                alt="">
                            <div class="text-hidden product-description text-white hover-target">
                                <!-- Añadir clase 'hover-target' -->
                                <p class="text-xs text-start"><strong>Ingredientes:</strong></p>
                                <ul class="list-disc text-xs text-start w-36 pl-4">
                                    @foreach (explode(',', $producto->ingredientes) as $ingrediente)
                                        <li> {{ $ingrediente }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold pt-4">{{ $producto->nombre }}</h3>
                    </div>
                </a>
            @endforeach

        </div>
    </section>

    <div class="">
        <div class="relative w-full md:w-[47rem] lg:w-[56rem] xl:w-[73rem] 2xl:w-[90rem] md:left-[20%] lg:left-[28%] xl:left-[23%] 2xl:left-[25%]">
            <h2 class="bg-[#DFEEF4] md:rounded-l-full h-44 md:h-60 xl:h-64 text-4xl bebas font-semibold uppercase text-center top-0 lg:top-14 2xl:top-20 flex items-center justify-center">
                ¿QUÉ <span class="text-3xl bebas"> &nbsp; DICE LA GENTE DE &nbsp; </span> ICATALI?</h2>
        </div>
    </div>


    <div class="lg:flex justify-between items-center gap-5 max-w-[1000px] mx-auto hidden mt-14">

        @foreach ($comentarios as $comentario)
            <div class="bg-white items-center border-t-[1.5rem]
        border-t-red-700  border-x-2 border-x-red-700 border-b-4 border-b-red-700
        p-6 py-5 container mx-auto max-w-[500px] h-[37rem] flex flex-col justify-start gap-2 overflow-y-auto">
                <div class="w-[190px] h-[220px]">
                    <img class="w-full h-full object-cover object-center" src="{{ $comentario->image }}" alt="">
                </div>
                <div>
                    <p class="text-center"><strong>{{ $comentario->alias }}</strong></p>
                    <p>{{ $comentario->comentario }}</p>
                </div>
            </div>
        @endforeach
    </div>


    <div id="default-carousel" class="relative w-full lg:hidden mt-10" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative  h-[36rem] overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            @php $contador = 0; @endphp
            @foreach ($comentarios as $comentario)
                @php $contador++; @endphp
                <div class="hidden overflow-y-auto duration-700 ease-in-out" data-carousel-item>
                    <div
                        class="h-[36rem] bg-white flex flex-col justify-center items-center border-t-[1.5rem]
                    border-t-red-700  border-x-2 border-x-red-700 border-b-4 border-b-red-700
                    px-14 py-5 container mx-auto max-w-[400px]">
                        <img class="w-60" src="{{ $comentario->image }}" alt="">
                        <p><strong>{{ $comentario->alias }}</strong></p>
                        <p>{{ $comentario->comentario }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            @for ($i = 0; $i < $contador; $i++)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="{{ $i }}"></button>
            @endfor
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
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
