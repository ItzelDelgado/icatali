<x-app-layout>

    <h1 class="bg-[url('../../../icatali/public/img/decoraciones/nube-preguntas.svg')] bg-no-repeat bg-cover h-36 flex justify-center items-center text-3xl mb-8">¿Como podemos ayudarte?</h1>
    <div x-data="{ open: false }" class="relative" x-on:click.outside="open = false">
        <!-- Botón del dropdown -->
        <div @click="open = !open" class="flex justify-center items-center bg-verde-icatali p-2 border-2">
            <h2 class="cursor-pointer ">¿Son productos específicamente para veganos?</h2>
            <i class="fa-solid fa-circle-chevron-down text-2xl"></i>
        </div>
        <!-- Contenido del dropdown -->
        <p x-show="open" class="dropdown-content relative bg-white shadow-md rounded-md px-4 mt-2 pb-2 w-full" x-transition:leave-end="opacity-0 transform ">
            No, sin embargo, los pueden consumir sin ningún problema ya que no contienen ningún ingrediente de origen animal.
        </p>
    </div>
    <div x-data="{ open: false }" class="relative" x-on:click.outside="open = false">
        <!-- Botón del dropdown -->
        <div @click="open = !open" class="flex justify-center items-center bg-verde-icatali p-2 border-2">
            <h2 class="cursor-pointer ">¿Son productos específicamente para veganos?</h2>
            <i class="fa-solid fa-circle-chevron-down text-2xl"></i>
        </div>
        <!-- Contenido del dropdown -->
        <p x-show="open" class="dropdown-content relative bg-white shadow-md rounded-md px-4 mt-2 pb-2 w-full" x-transition:enter="transition-opacity transition-transform ease-out duration-300" x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition-opacity transition-transform ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform ">
            No, sin embargo, los pueden consumir sin ningún problema ya que no contienen ningún ingrediente de origen animal.
        </p>
    </div>
</x-app-layout>