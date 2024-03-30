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
    <div class="relative h-[27rem]">
        <div class="relative right-14 bg-blue-300 rounded-full w-[25rem] h-[25rem]"></div>
        <div class="absolute top-11">
            <h1 class="font-bold text-xl text-center">ACERCA DE ICATALI</h1>
            <p class="w-80 pl-3 text-center">Aunque cada persona es diferente, nosotros aseguramos que los beneficios
                siempre estarán presentes gracias a que nos hemos adaptado a los nuevos estilos de vida o tipos de dieta
                como la restrictiva (por enfermedad), plant based, Veganos, Vegetarianos, Flexivegetariano, plant
                forward, entre otros, ofreciendo una diversidad de productos que pueden cubrir las necesidades de cada
                población.</p>
            <button class="absolute left-48 -bottom-16 bg-black rounded-full text-white p-3 font-bold"><a
                    href="">CONTACTANOS</a></button>
        </div>
    </div>
    <section class="container mx-auto bg-[url('../../../icatali/public/img/decoraciones/nube-acerca-de.svg')] bg-no-repeat bg-cover h-[54rem]
            flex justify-center items-center">
        <div>
            <h2 class="text-xl bebas-400 font-semibold uppercase mb-4">¿QUIÉNES SOMOS?</h2>
            <p>En ICATALI ofrecemos productos que se caracterizan por poseer un alto contenido de proteína de origen
                vegetal digerible, que se diseñaron un enfoque emocional, nutrimental y funcional con soporte técnico y
                científico</p>
            <h2 class="text-xl bebas-400 font-semibold uppercase my-4">Compromiso con la Nutrición Sostenible</h2>
            <p>En ICATALI, estamos comprometidos con la nutrición sostenible. Nuestros productos se destacan por su alto
                contenido de proteínas de origen vegetal digeribles, un paso audaz hacia un futuro alimentario más
                consciente y equilibrado.</p>
            <h2 class="text-xl bebas-400 font-semibold uppercase my-4">Diseño Emocional, Nutricional y Funcional</h2>
            <p>Cada producto ICATALI se ha diseñado con un enfoque integral. Más allá de nutrir tu cuerpo, nos
                esforzamos por ofrecer experiencias alimenticias que despierten tus emociones. Desde el primer bocado,
                queremos que sientas la conexión entre el bienestar físico y emocional.</p>
        </div>
    </section>
</x-app-layout>
