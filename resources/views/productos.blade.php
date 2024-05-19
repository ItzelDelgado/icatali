<x-app-layout>
    @section('title', 'Productos')
    <div
        class="bg-[url('../../../icatali/public/img/decoraciones/nube-productos.svg')] bg-no-repeat bg-cover h-52 mb-8 px-2 flex justify-center items-center">
        <div class="px-6 py-3 text-center">
            <h1 class="text-4xl">Aquí, cada producto es una promesa de bienestar</h1>
            <p>Aseguramos que la experiencia de consumir nuestros productos será única y diferente.</p>
        </div>
    </div>
    <form action="{{ route('productos.buscar') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6">
        @csrf
        <x-validation-errors class="mb-4" />
        <div class="flex items-baseline justify-end container">
            <div class="mb-4 max-w-52">
                <x-input value="{{ old('keyword') }}" name="keyword" class="w-full" placeholder="buscar..." />
            </div>
            <div class="flex justify-end h-10">
                <x-button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </x-button>
            </div>
        </div>
    </form>
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
