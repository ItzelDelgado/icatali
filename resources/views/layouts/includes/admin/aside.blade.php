@php
    $links = [
        // [
        //     //Informacion acerca del enlace
        //     'name' => 'Dashboard',
        //     'url' => route('admin.dashboard'),
        //     'active' => request()->routeIs('admin.dashboard'),
        //     'icon' => 'fa-solid fa-gauge-high',
        //     'can' => ''
        // ],
        [
            //Informacion acerca del enlace
            'name' => 'Comentarios',
            'url' => route('admin.comentarios.index'),
            'active' => request()->routeIs('admin.comentarios.*'),
            'icon' => 'fa-solid fa-comments',
            'can' => 'gestionar comentarios',
        ],
        [
            //Informacion acerca del enlace
            'name' => 'Preguntas Frecuentes',
            'url' => route('admin.preguntas_frecuentes.index'),
            'active' => request()->routeIs('admin.preguntas_frecuentes.*'),
            'icon' => 'fa-solid fa-circle-question',
            'can' => 'gestionar preguntas frecuentes',
        ],
        [
            //Informacion acerca del enlace
            'name' => 'Productos',
            'url' => route('admin.productos.index'),
            'active' => request()->routeIs('admin.productos.*'),
            'icon' => 'fa-solid fa-seedling',
            'can' => 'gestionar productos',
        ],
        [
            //Informacion acerca del enlace
            'name' => 'Usuarios',
            'url' => route('admin.users.index'),
            'active' => request()->routeIs('admin.users.*'),
            'icon' => 'fa-solid fa-user',
            'can' => 'gestionar usuarios',
        ],
        [
            //Informacion acerca del enlace
            'name' => 'Roles',
            'url' => route('admin.roles.index'),
            'active' => request()->routeIs('admin.roles.*'),
            'icon' => 'fa-solid fa-user-tag',
            'can' => 'gestionar roles',
        ],
        // [
        //     //Informacion acerca del enlace
        //     'name' => 'Permisos',
        //     'url' => route('admin.permissions.index'),
        //     'active' => request()->routeIs('admin.permissions.*'),
        //     'icon' => 'fa-solid fa-key',
        //     'can' => 'gestionar permisos',
        // ],
    ];
@endphp
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    :class="{
        '-translate-x-full': !open,
        'transform-none': open,
    }" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            @foreach ($links as $link)
                @can($link['can'])
                    <li>
                        <a href="{{ $link['url'] }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $link['active'] ? 'bg-gray-100' : '' }}">
                            {{-- <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg> --}}

                            <i class="{{ $link['icon'] }} text-gray-500"></i>
                            <span class="ms-3">{{ $link['name'] }}</span>
                        </a>
                    </li>
                @endcan
            @endforeach
        </ul>
    </div>
</aside>
