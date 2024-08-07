<x-app-layout>
    @section('title', 'Sobre nosotros')

    <div class="md:hidden">
        <div class="relative h-[29rem] mb-12">
            <div class="relative right-14 bg-[#DFEEF4] rounded-full w-[29rem] h-[29rem]"></div>
            <div class="absolute top-11 left-4">
                <h1 class="bebas text-3xl text-center mb-2 ">ACERCA DE ICATALI</h1>

                <p class="w-80 pl-3 text-center">Icatali nació con la visión de ofrecer alimentos saludables, nutritivos y sostenibles a precios competitivos para pacientes de hospitales públicos. Comprometidos con la alta calidad y respaldados por la ciencia, promovemos el bienestar de las personas y del medio ambiente. Adaptamos nuestros productos a diferentes estilos de vida y planes alimenticios, asegurando opciones saludables y confiables tanto para consumidores sanos como para aquellos con enfermedades.</p>
                <button class="absolute left-48 -bottom-14 bg-black rounded-full text-white p-3 font-bold"><a
                        href="">CONTACTANOS</a></button>
            </div>

        </div>
        <section class="container mx-auto bg-[url('../../../icatali/public/img/decoraciones/nube-acerca-de.svg')] bg-no-repeat bg-cover h-[66rem]
            flex justify-center items-center">
            <div>
                <h2 class="text-2xl bebas font-semibold uppercase mb-4">¿QUIÉNES SOMOS?</h2>
                <p>En ICATALI ofrecemos productos que se caracterizan por poseer un alto contenido de proteína de origen
                    vegetal digerible, que se diseñaron un enfoque emocional, nutrimental y funcional con soporte
                    técnico y
                    científico</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Compromiso con la Nutrición Sostenible</h2>
                <p>En ICATALI, estamos comprometidos con la nutrición sostenible. Nuestros productos se destacan por su
                    alto
                    contenido de proteínas de origen vegetal digeribles, un paso audaz hacia un futuro alimentario más
                    consciente y equilibrado.</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Diseño Emocional, Nutricional y Funcional</h2>
                <p>Cada producto ICATALI se ha diseñado con un enfoque integral. Más allá de nutrir tu cuerpo, nos
                    esforzamos por ofrecer experiencias alimenticias que despierten tus emociones. Desde el primer
                    bocado,
                    queremos que sientas la conexión entre el bienestar físico y emocional.</p>
                <div class="max-w-[300px] mx-auto mt-6">
                    <img class="w-full" src="{{ asset('img/sobre_nosotros-semillas.png') }}" alt="">
                </div>
            </div>
        </section>
    </div>

    <div class="hidden md:block">
        <div class="flex justify-center mt-4">
            <div class="relative h-[34rem] mb-12">
                <div class="relative  bg-[#DFEEF4] rounded-full w-[30rem] h-[30rem]"></div>
                <div class="absolute top-11 right-20">
                    <h1 class="bebas text-3xl text-center mb-2 ">ACERCA DE ICATALI</h1>
                    <p class="w-80 text-center">Icatali nació con la visión de ofrecer alimentos saludables, nutritivos y sostenibles a precios competitivos para pacientes de hospitales públicos. Comprometidos con la alta calidad y respaldados por la ciencia, promovemos el bienestar de las personas y del medio ambiente. Adaptamos nuestros productos a diferentes estilos de vida y planes alimenticios, asegurando opciones saludables y confiables tanto para consumidores sanos como para aquellos con enfermedades.</p>
                    <button class="absolute left-48 -bottom-14 bg-black rounded-full text-white p-3 font-bold"><a
                            href="">CONTACTANOS</a></button>
                </div>
            </div>
            <div class="relative max-w-[700px] ml-20">
                <img class="w-full" src="{{ asset('img/decoraciones/sobre-nosotros-banner.png') }}" alt="">
            </div>
            <img class="w-12 absolute lg:top-[56%] lg:right-[40%] hidden lg:block" src="{{asset('img/decoraciones/semillas-1.svg')}}" alt="">
            <img class="w-8 absolute lg:top-[30%] lg:right-[56%] hidden lg:block" src="{{asset('img/decoraciones/semillas-3.svg')}}" alt="">
        </div>
        <div class="relative">
            <div class="container max-w-[800px] relative z-20">
                <h2 class="text-2xl bebas font-semibold uppercase mb-4">¿QUIÉNES SOMOS?</h2>
                <p>En ICATALI ofrecemos productos que se caracterizan por poseer un alto contenido de proteína de origen
                    vegetal digerible, que se diseñaron un enfoque emocional, nutrimental y funcional con soporte
                    técnico y
                    científico</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Compromiso con la Nutrición Sostenible</h2>
                <p>En ICATALI, estamos comprometidos con la nutrición sostenible. Nuestros productos se destacan por su
                    alto contenido de proteínas de origen vegetal digeribles, un paso audaz hacia un futuro alimentario
                    más consciente y equilibrado.</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Diseño Emocional, Nutricional y Funcional</h2>
                <p>Cada producto ICATALI se ha diseñado con un enfoque integral. Más allá de nutrir tu cuerpo, nos
                    esforzamos por ofrecer experiencias alimenticias que despierten tus emociones. Desde el primer
                    bocado, queremos que sientas la conexión entre el bienestar físico y emocional.</p>
                <div class="max-w-[400px] mx-auto mt-16">
                    <img class="w-full" src="{{ asset('img/sobre_nosotros-semillas.png') }}" alt="">
                </div>
            </div>
            <div
                class="z-10 bg-[url('../../../icatali/public/img/decoraciones/nosotros-lateral-verde.svg')] bg-no-repeat bg-contain h-[47rem] w-[41rem] absolute -top-0 xl:-top-20">
            </div>
            <div
                class="z-10 bg-[url('../../../icatali/public/img/decoraciones/nosotros-lateral-azul.svg')] bg-no-repeat bg-contain h-[47rem] w-[41rem] absolute right-0 top-40">
            </div>
        </div>
    </div>
</x-app-layout>
