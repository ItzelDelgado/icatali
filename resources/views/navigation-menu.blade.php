@php
    $links = [
        [
            //Informacion acerca del enlace
            'name' => 'INICIO',
            'url' => route('inicio'),
            'active' => request()->routeIs('inicio'),
        ],
        [
            //Informacion acerca del enlace
            'name' => 'SOBRE NOSOTROS',
            'url' => route('sobre_nosotros'),
            'active' => request()->routeIs('sobre_nosotros'),
        ],
        [
            //Informacion acerca del enlace
            'name' => 'PRODUCTOS',
            'url' => route('productos'),
            'active' => request()->routeIs('productos'),
        ],
        [
            //Informacion acerca del enlace
            'name' => 'PREGUNTAS FRECUENTES',
            'url' => route('preguntas_frecuentes'),
            'active' => request()->routeIs('preguntas_frecuentes'),
        ],
        [
            //Informacion acerca del enlace
            'name' => 'CONTACTO',
            'url' => route('contacto'),
            'active' => request()->routeIs('contacto'),
        ],
        // [
        //     //Informacion acerca del enlace
        //     'name' => 'SOBRE NOSOTROS',
        //     'url' => route('admin.hospitals.index'),
        //     'active' => request()->routeIs('admin.hospitals.*'),
        //     'icon' => 'fa-solid fa-hospital',
        // ],
        // [
        //     //Informacion acerca del enlace
        //     'name' => 'PRODUCTOS',
        //     'url' => route('admin.users.index'),
        //     'active' => request()->routeIs('admin.users.*'),
        //     'icon' => 'fa-solid fa-users',
        // ],
        // [
        //     //Informacion acerca del enlace
        //     'name' => 'PREGUNTAS FRECUENTES',
        //     'url' => route('admin.medicines.index'),
        //     'active' => request()->routeIs('admin.medicines.*'),
        //     'icon' => 'fa-solid fa-prescription-bottle',
        // ],
        // [
        //     //Informacion acerca del enlace
        //     'name' => 'CONTACTO',
        //     'url' => route('admin.solicitudes.index'),
        //     'active' => request()->routeIs('admin.solicitudes.*'),
        //     'icon' => 'fa-solid fa-file-import',
        // ],
    ];
@endphp
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('inicio') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links Lo generamos con un for y el arreglo de arreglos de $links-->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @foreach ($links as $link)
                        <x-nav-link :href="$link['url']" :active="$link['active']">
                            {{ $link['name'] }}
                        </x-nav-link>
                    @endforeach

                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        @foreach ($links as $link)
            <x-responsive-nav-link :href="$link['url']" :active="$link['active']">
                {{ $link['name'] }}
            </x-responsive-nav-link>
        @endforeach
    </div>
</nav>
