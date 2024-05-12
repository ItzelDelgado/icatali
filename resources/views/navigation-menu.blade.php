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
        <div class="flex justify-between h-16 items-center sm:justify-center sm:items-center">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('inicio') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links Lo generamos con un for y el arreglo de arreglos de $links-->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex sm:items-center">
                    @foreach ($links as $link)
                        <x-nav-link :href="$link['url']" :active="$link['active']">
                            {{ $link['name'] }}
                        </x-nav-link>
                    @endforeach
                    <div class="flex justify-center gap-5">
                        <a href="https://www.instagram.com/_icatali/?igsh=NjZhbW1iYzEwdzJv" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://wa.link/aw9lcl" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                        </a>
                    </div>
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
