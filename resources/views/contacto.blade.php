<x-app-layout>
    @section('title', 'Contacto')
    <div class="md:hidden">
        <div class="relative h-80 w-full">
            <h1 class="w-64 absolute z-20 top-8 left-3 text-2xl">Cada bocado es un paso hacia un futuro más saludable y
                sostenible</h1>
            <div
                class="z-10 bg-[url('../../../icatali/public/img/decoraciones/nube-contacto-2.svg')] bg-no-repeat bg-contain w-72 h-72 absolute right-0">
            </div>
            <div
                class="z-10 bg-[url('../../../icatali/public/img/decoraciones/nube-contacto.svg')] bg-no-repeat bg-contain w-full h-72 flex justify-center items-center absolute">
            </div>
        </div>

        <div class="w-8/12 mx-auto">
            <div class="max-w-[500px] mb-4 mx-auto">
                <h1 class="text-3xl">CONTACTO</h1>
                <p>Telefono: <span>5532110142</span></p>
                <p>Horario: <span>9-17 horas</span></p>
            </div>
            <form class="flex flex-col" action="{{ route('contacto.store') }}" method="POST">
                @csrf
                <label class="bebas text-xl font-bold mb-2" for="name">NOMBRE:</label>
                <x-input
                    class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                    type="text" name="nombre" />
                <label class="bebas text-xl font-bold mb-2" for="correo">CORREO:</label>
                <x-input
                    class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                    type="email" name="correo" />
                <label class="bebas text-xl font-bold mb-2" for="telefono">TALÉFONO</label>
                <x-input
                    class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                    type="text" name="telefono" />
                <label class="bebas text-xl font-bold mb-2" for="comentario">COMENTARIO</label>
                <textarea
                    class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-3xl w-full h-36 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                    type="text" name="comentario">
                </textarea>
                <input class="bg-verde-icatali w-fit font-bold px-6 py-3 rounded-full mt-4" type="submit">
            </form>
            <img class="w-full rounded-lg mt-4" src="{{ asset('img/entrada_icat.jpg') }}" alt="">
        </div>
    </div>

    <div class="md:block  hidden relative">
        <div class="">
            <div class="flex justify-center mt-4 gap-4">
                <div class="relative max-w-[700px] ml-20">
                    <img class="w-full" src="{{ asset('img/decoraciones/icat-contacto.png') }}" alt="">
                </div>
                <div class="relative h-[27rem] mb-12">
                    <div class="relative  bg-[#DFEEF4] rounded-full w-[25rem] h-[25rem]"></div>
                    <div class="absolute top-11 right-10">
                        <h1 class="bebas text-3xl text-center mb-2 ">CONTACTO</h1>
                        <p class="w-80 text-center">
                            Telefono: 5532110142 <br>
                            Horario: 9-17 horas
                        </p>
                        <button class="absolute left-48 -bottom-14 bg-black rounded-full text-white p-3 font-bold"><a
                                href="">CONTACTANOS</a></button>
                    </div>
                </div>

            </div>
            <div class="max-w-[600px] w-[600px] mx-auto mt-10">
                <form class="flex flex-col" action="{{ route('contacto.store') }}" method="POST">
                    @csrf
                    <x-validation-errors class="mb-4" />
                    <label class="bebas text-xl font-bold mb-2" for="nombre">NOMBRE:</label>
                    <x-input
                        class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                        type="text" name="nombre" value="{{ old('nombre') }}" />
                    <label class="bebas text-xl font-bold mb-2" for="correo">CORREO:</label>
                    <x-input
                        class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                        type="email" name="correo" value="{{ old('correo') }}" />
                    <label class="bebas text-xl font-bold mb-2" for="telefono">TALÉFONO</label>
                    <x-input
                        class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                        type="text" name="telefono" value="{{ old('telefono') }}" />
                    <label class="bebas text-xl font-bold mb-2" for="mensaje">MENSAJE</label>
                    <textarea
                        class="bg-gray-200 appearance-none border-2 border-gray-300 rounded-3xl w-full h-36 py-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-400 mb-2"
                        type="text" name="mensaje">
                        {{ old('mensaje') }}
                    </textarea>
                    <input class="bg-verde-icatali w-fit font-bold px-6 py-3 rounded-full mt-4 cursor-pointer"
                        type="submit">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
