<x-app-layout>

    <h1
        class="bg-[url('../../../icatali/public/img/decoraciones/nube-preguntas.svg')] bg-no-repeat bg-cover h-36 flex justify-center items-center text-3xl mb-8 bebas">
        ¿Como podemos ayudarte?</h1>
    <div class="max-w-[800px] mx-auto">
        <div class="w-full">
            @foreach ($preguntas_frecuentes as $pregunta_frecuente)
                <div x-data="{ open: false }" class="relative" x-on:click.outside="open = false">
                    <!-- Botón del dropdown -->
                    <div @click="open = !open"
                        class="flex justify-center items-center bg-verde-icatali p-2 border-2 md:gap-2 gap-1">
                        <h2 class="cursor-pointer ">{{ $pregunta_frecuente->pregunta }}</h2>
                        <i class="fa-solid fa-circle-chevron-down text-2xl"></i>
                    </div>
                    <!-- Contenido del dropdown -->
                    <p x-show="open"
                        class="dropdown-content relative bg-white shadow-md rounded-md px-4 mt-2 pb-2 w-full"
                        x-transition:leave-end="opacity-0 transform ">
                        {{ $pregunta_frecuente->respuesta }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>

</x-app-layout>
