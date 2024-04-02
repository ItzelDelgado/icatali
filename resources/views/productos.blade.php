<x-app-layout>

    <div class="bg-[url('../../../icatali/public/img/decoraciones/nube-productos.svg')] bg-no-repeat bg-cover h-52 mb-8 px-2 flex justify-center items-center">
        <div class="px-6 py-3">
            <h1 class="text-4xl">Aquí, cada producto es una promesa de bienestar</h1>
            <p>Aseguramos que la experiencia de consumir nuestros productos será única y diferente.</p>
        </div>
    </div>

    <div class="mb-6">
        <div
            class="bg-[url('../../../icatali/public/img/decoraciones/fondo-productos-verde-2.svg')] bg-no-repeat bg-contain w-60 h-56 mx-auto flex items-center justify-center mb-3">
            <img class="w-44" src="{{ asset('img/productos/producto-hamburguesa.png') }}" alt="">
        </div>
        <div class="flex flex-col items-center gap-4">
            <p class="font-bold">Precio: <span>55 MXN</span></p>
            <button class="bg-blue-300 font-bold w-fit px-3 py-2 rounded-2xl"><a
                    href="">Comprar</a></button>
        </div>
    </div>

    <div>
        <div
            class="bg-[url('../../../icatali/public/img/decoraciones/fondo-productos-verde-2.svg')] bg-no-repeat bg-contain w-60 h-56 mx-auto flex items-center justify-center mb-3">
            <img class="w-44" src="{{ asset('img/productos/productos-galletas.png') }}" alt="">
        </div>
        <div class="flex flex-col items-center gap-4">
            <p class="font-bold">Precio: <span>55 MXN</span></p>
            <button class="bg-blue-300 font-bold w-fit px-3 py-2 rounded-2xl"><a
                    href="">Comprar</a></button>
        </div>
    </div>

</x-app-layout>
