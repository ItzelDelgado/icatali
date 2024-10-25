<x-app-layout>
    @section('title', 'Sobre nosotros')

    <div class="md:hidden">
        <div class="relative h-[29rem] mb-12">
            <div class="relative right-14 bg-[#DFEEF4] rounded-full w-[29rem] h-[29rem]"></div>
            <div class="absolute top-11 left-4">
                <h1 class="bebas text-3xl text-center mb-2 ">ACERCA DE ICATALI</h1>

                <p class="w-80 pl-3 text-center">Icatali nació con la visión de ofrecer alimentos saludables, nutritivos
                    y sostenibles a precios competitivos para pacientes de hospitales públicos. Comprometidos con la
                    alta calidad y respaldados por la ciencia, promovemos el bienestar de las personas y del medio
                    ambiente. Adaptamos nuestros productos a diferentes estilos de vida y planes alimenticios,
                    asegurando opciones saludables y confiables tanto para consumidores sanos como para aquellos con
                    enfermedades.</p>
                <button class="absolute left-48 -bottom-14 bg-black rounded-full text-white p-3 font-bold"><a
                        href="">CONTACTANOS</a></button>
            </div>

        </div>
        <section
            class="container mx-auto bg-[url('../../../icatali/public/img/decoraciones/nube-acerca-de.svg')] bg-no-repeat bg-cover h-[66rem]
            flex justify-center items-center">
            <div>
                <h2 class="text-2xl bebas font-semibold uppercase mb-4">¿QUIÉNES SOMOS?</h2>
                <p>En ICATALI ofrecemos productos que se caracterizan por tener un alto contenido de proteína de origen
                    vegetal digerible. Se diseñaron con un enfoque emocional, nutrimental y funcional con soporte
                    técnico y
                    científico</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Compromiso con la Nutrición Sostenible</h2>
                <p>En ICATALI, estamos comprometidos con la nutrición sostenible. Nuestros productos se destacan por su
                    alto
                    contenido de proteínas de origen vegetal digeribles, un paso seguro hacia un futuro alimentario más
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
                    <p class="w-80 text-center">Icatali nació con la visión de ofrecer alimentos saludables, nutritivos
                        y sostenibles a precios competitivos para pacientes de hospitales públicos. Comprometidos con la
                        alta calidad y respaldados por la ciencia, promovemos el bienestar de las personas y del medio
                        ambiente. Adaptamos nuestros productos a diferentes estilos de vida y planes alimenticios,
                        asegurando opciones saludables y confiables tanto para consumidores sanos como para aquellos con
                        enfermedades.</p>
                    <button class="absolute left-48 -bottom-14 bg-black rounded-full text-white p-3 font-bold"><a
                            href="">CONTACTANOS</a></button>
                </div>
            </div>
            <div class="relative max-w-[700px] ml-20">
                <img class="w-full" src="{{ asset('img/decoraciones/sobre-nosotros-banner.png') }}" alt="">
            </div>
            <img class="w-12 absolute lg:top-[56%] lg:right-[40%] hidden lg:block"
                src="{{ asset('img/decoraciones/semillas-1.svg') }}" alt="">
            <img class="w-8 absolute lg:top-[30%] lg:right-[56%] hidden lg:block"
                src="{{ asset('img/decoraciones/semillas-3.svg') }}" alt="">
        </div>
        <div class="relative">
            <div class="container max-w-[800px] relative z-20">
                <h2 class="text-2xl bebas font-semibold uppercase mb-4">¿QUIÉNES SOMOS?</h2>
                <p>En ICATALI ofrecemos productos que se caracterizan por tener un alto contenido de proteína de origen
                    vegetal digerible. Se diseñaron con un enfoque emocional, nutrimental y funcional con soporte
                    técnico y
                    científico</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Compromiso con la Nutrición Sostenible</h2>
                <p>En ICATALI, estamos comprometidos con la nutrición sostenible. Nuestros productos se destacan por su
                    alto contenido de proteínas de origen vegetal digeribles, un paso seguro hacia un futuro alimentario
                    más consciente y equilibrado.</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Diseño Emocional, Nutricional y Funcional</h2>
                <p>Cada producto ICATALI se ha diseñado con un enfoque integral. Más allá de nutrir tu cuerpo, nos
                    esforzamos por ofrecer experiencias alimenticias que despierten tus emociones. Desde el primer
                    bocado, queremos que sientas la conexión entre el bienestar físico y emocional.</p>
                <h2 class="text-2xl bebas font-semibold uppercase my-4">Nuestros especialistas</h2>
                <div class="border-2 p-3 bg-white rounded-lg">
                    <div class="flex items-center gap-4">
                        <div class="w-4/12 h-56">
                            <img class="w-full h-full object-cover object-center rounded-lg"
                                src="{{ asset('img/Isadora_Martinez_Arellano.jpg') }}" alt="">
                        </div>
                        <p class="w-8/12">La <strong>Dra. Isadora Martínez</strong> Arellano tiene la licenciatura de
                            Ingeniera en Alimentos por la Universidad Autónoma Metropolitana-Iztapalapa y estudios de
                            posgrado en Biotecnología por la misma universidad. Realizó una estancia de posdoctorado en
                            el Instituto de Agroquímica y Tecnología de Alimentos- Consejo Superior de Investigaciones
                            Científicas, Valencia (España, 2014). De octubre del 2016 a diciembre del 2018 participó en
                            el programa de Cátedras-CONACYT- proyecto 988. Actualmente es Técnico Asociado C.</p>
                    </div>

                    <div class="w-full">
                        <div class="text-end">
                            <button class="bg-verde-icatali w-fit px-2 rounded-md">
                                <a target="_blank" href="https://www.icat.unam.mx/isadora-martinez-arellano/">Ver más detalles</a>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="border-2 p-3 bg-white mt-4 rounded-lg">
                    <div class="flex items-center gap-4">
                        <div class="w-4/12 h-56">
                            <img class="w-full h-full object-cover object-center rounded-lg"
                                src="{{ asset('img/MarIa_Soledad_Cordova_Aguilar.jpg') }}" alt="">
                        </div>
                        <p class="w-8/12">La Dra. María Soledad Córdova Aguilar es Ingeniera en Alimentos por la UAM-Iztapalapa, con una especialización en Cerveza y Malta por la Universidad Politécnica de Madrid, y posee una Maestría y Doctorado en Biotecnología por la UNAM. Desde 1998 es Técnico Académico definitivo en la UNAM. Ha trabajado en las industrias quesera y cervecera en México y España, y durante 10 años colaboró en el Programa Universitario de Alimentos de la UNAM. Actualmente forma parte del grupo de Ingeniería de Proceso en el ICAT-UNAM, donde se dedica a la docencia e investigación en bioprocesos y bioingeniería, con aplicaciones en alimentos y terapéutica clínica.</p>
                    </div>

                    <div class="w-full">
                        <div class="text-end">
                            <button class="bg-verde-icatali w-fit px-2 rounded-md">
                                <a target="_blank" href="https://www.icat.unam.mx/dra-maria-soledad-cordova-aguilar/">Ver más detalles</a>
                            </button>
                        </div>
                    </div>

                </div>
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
