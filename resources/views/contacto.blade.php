<x-app-layout>
    <div class="relative h-80 w-full">
        <h1 class="w-64 absolute z-20 top-8 left-3 text-2xl">Cada bocado es un paso hacia un futuro más saludable y sostenible</h1>
        <div
            class="z-10 bg-[url('../../../icatali/public/img/decoraciones/nube-contacto-2.svg')] bg-no-repeat bg-contain w-72 h-72 absolute right-0">
        </div>
        <div class="z-10 bg-[url('../../../icatali/public/img/decoraciones/nube-contacto.svg')] bg-no-repeat bg-contain w-full h-72
        flex justify-center items-center absolute">
        </div>
    </div>

    <div class="w-8/12 mx-auto">
        <form class="flex flex-col" action="">
            <label class="bebas-400 font-bold mb-2" for="name">NOMBRE:</label>
            <input
                class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            <label class="bebas-400 font-bold mb-2" for="">CORREO:</label>
            <input
                class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            <label class="bebas-400 font-bold mb-2" for="">TALÉFONO</label>
            <input
                class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            <label class="bebas-400 font-bold mb-2" for="">COMENTARIO</label>
            <textarea class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-3xl w-full h-36 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            </textarea>
            <input class="bg-verde-icatali w-fit font-bold px-6 py-3 rounded-full mt-4" type="submit">
        </form>
    </div>
</x-app-layout>
