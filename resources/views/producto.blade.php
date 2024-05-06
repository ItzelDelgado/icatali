<x-app-layout>

    <div class="container grid md:grid-cols-2 md:items-center gap-8 md:mt-20">
        <div id="default-carousel" class="relative w-full md:col-start-2 md:row-start-1" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden rounded-lg md:h-[27rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ $producto->image }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ $producto->image_pa }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ $producto->image_izq }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ $producto->image_der }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span class="">
                    <svg class="w-8 h-8 text-green-800 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                <span class="">
                    <svg class="w-8 h-8 text-green-800 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div>
            <h2 class="font-bold text-2xl md:text-4xl mt-4">{{ $producto->nombre }}</h2>
            <div class="flex items-center gap-2 mt-4">
                @if ($producto->precio_descuento)
                    <p class="font-bold line-through text-gray-500">{{ $producto->precio }} MXN</p>
                    <p class="font-bold">{{$producto->precio_descuento}} MXN</p>
                @else
                    <p class="font-bold">{{ $producto->precio }} MXN</p>
                @endif


                <button class="bg-green-300 font-bold w-fit px-3 py-1 rounded-2xl"><a
                        href="{{ route('contacto') }}">Comprar</a></button>
            </div>
            <p class="mt-4"><span class="font-bold">Descripción:</span> {{ $producto->descripcion }}</p>
            <p class="font-bold mt-4">Beneficios:</p>
            @if ($producto->beneficios)
                <ul class="list-disc pl-6">
                    @foreach (explode(',', $producto->beneficios) as $beneficio)
                        <li>{{ trim($beneficio) }}</li>
                    @endforeach
                </ul>
            @endif
            <p class="font-bold mt-4">Ingredientes:</p>
            @if ($producto->ingredientes)
            <ul class="list-disc pl-6">
                @foreach (explode(',', $producto->ingredientes) as $ingrediente)
                    <li>{{ trim($ingrediente) }}</li>
                @endforeach
            </ul>
        @endif
        </div>
    </div>

</x-app-layout>
