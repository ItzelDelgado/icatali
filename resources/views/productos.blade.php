<x-app-layout>

    <div
        class="bg-[url('../../../icatali/public/img/decoraciones/nube-productos.svg')] bg-no-repeat bg-cover h-52 mb-8 px-2 flex justify-center items-center">
        <div class="px-6 py-3 text-center">
            <h1 class="text-4xl">Aquí, cada producto es una promesa de bienestar</h1>
            <p>Aseguramos que la experiencia de consumir nuestros productos será única y diferente.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 mx-auto max-w-[60rem] gap-6">
        @foreach ($productos as $producto)
            <div>
                <div
                    class="bg-[url('../../../icatali/public/img/decoraciones/fondo-productos-verde-2.svg')] bg-no-repeat bg-contain w-60 h-56 mx-auto flex items-center justify-center mb-3">
                    <img class="w-44" src="{{ $producto->image }}" alt="">
                </div>
                <div class="flex flex-col items-center gap-4">
                    <p class="font-bold"><span>{{ $producto->nombre }}</span></p>
                    @if ($producto->precio_descuento)
                        <p class="font-bold line-through text-gray-500">{{ $producto->precio }} MXN</p>
                        <p class="font-bold">{{ $producto->precio_descuento }} MXN</p>
                    @else
                        <p class="font-bold">{{ $producto->precio }} MXN</p>
                    @endif
                    <button class="bg-blue-300 font-bold w-fit px-3 py-2 rounded-2xl"><a
                            href="{{ route('productos.show', $producto) }}">Comprar</a></button>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
