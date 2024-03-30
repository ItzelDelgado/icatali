<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
    <h1>Cada bocado es un paso hacia un futuro más saludable y sostenible</h1>
    <div class="w-10/12 mx-auto">
        <form class="flex flex-col" action="">
            <label class="bebas-400 font-bold mb-2" for="name">NOMBRE:</label>
            <input class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            <label class="bebas-400 font-bold mb-2" for="">CORREO:</label>
            <input class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            <label class="bebas-400 font-bold mb-2" for="">TALÉFONO</label>
            <input class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            <label class="bebas-400 font-bold mb-2" for="">COMENTARIO</label>
            <input class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                type="text" name="nombre">
            <input type="submit">
        </form>
    </div>
</x-app-layout>
