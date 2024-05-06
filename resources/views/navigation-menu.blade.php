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
            'url' => route('productos.index'),
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
            'url' => route('contacto.index'),
            'active' => request()->routeIs('contacto.index'),
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
        <div class="flex justify-between h-16 items-center">
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
                    <form class="max-w-md mx-auto mt-3">
                        <div class="relative w-full">
                            <input type="search" id="location-search"
                                class="mr-10 block p-2.5 w-full z-20 text-sm text-gray-900 rounded-3xl bg-verde-icatali border-white"
                                placeholder="Buscar" required />
                            <button type="submit" class="absolute top-0 end-0 h-full p-2.5 text-sm font-medium rounded-3xl">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md  focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }"
                            class="inline-flex text-black fill-black"
                            d="m11 16.745c0-.414.336-.75.75-.75h9.5c.414 0 .75.336.75.75s-.336.75-.75.75h-9.5c-.414 0-.75-.336-.75-.75zm-9-5c0-.414.336-.75.75-.75h18.5c.414 0 .75.336.75.75s-.336.75-.75.75h-18.5c-.414 0-.75-.336-.75-.75zm4-5c0-.414.336-.75.75-.75h14.5c.414 0 .75.336.75.75s-.336.75-.75.75h-14.5c-.414 0-.75-.336-.75-.75z"
                            fill-rule="nonzero" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden text-black fill-black"
                            d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z" />
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
        <form class="max-w-md mx-auto ">
            <div class="relative w-full">
                <input type="search" id="location-search"
                    class="mr-10 block p-2.5 w-full z-20 text-sm text-gray-900 rounded-3xl bg-verde-icatali border-white"
                    placeholder="Buscar" required />
                <button type="submit" class="absolute top-0 end-0 h-full p-2.5 text-sm font-medium rounded-3xl">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</nav>
