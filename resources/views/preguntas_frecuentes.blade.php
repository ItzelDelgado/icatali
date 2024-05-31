<x-app-layout>
    @section('title', 'Preguntas frecuentes')
    <h1
        class="bg-[url('../../../icatali/public/img/decoraciones/nube-preguntas.svg')] bg-no-repeat bg-cover h-52 flex justify-center items-center text-4xl mb-8 bebas ">
        ¿Como podemos ayudarte?</h1>
    <img class="hidden xl:block w-40 absolute lg:top-[43%] lg:right-[84%] rotate-[123deg] " src="{{ asset('img/decoraciones/plantita-1.svg') }}" alt="">
    <img class="hidden xl:block w-40 absolute lg:top-[50%] lg:right-[9%] " src="{{ asset('img/decoraciones/costal-semillas.svg') }}" alt="">
    <div class="max-w-[800px] mx-auto">
        <div class="w-full">
            @foreach ($preguntas_frecuentes as $pregunta_frecuente)
                <div x-data="{ open: false }" class="relative" x-on:click.outside="open = false">
                    <!-- Botón del dropdown -->
                    <div @click="open = !open"
                        class="w-full flex justify-center items-center bg-verde-icatali p-2 border-2 md:gap-2 gap-1 rounded-2xl">
                        <h2 class="px-4 cursor-pointer w-11/12">{{ $pregunta_frecuente->pregunta }}</h2>
                        <i class="w-1/12 text-center fa-solid fa-circle-chevron-down text-2xl"></i>
                    </div>
                    <!-- Contenido del dropdown -->
                    <p x-show="open" class="dropdown-content relative bg-white px-4 mt-2 pb-2 w-full rounded-b-lg"
                        x-transition:leave-end="opacity-0 transform ">
                        {{ $pregunta_frecuente->respuesta }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>

</x-app-layout>
