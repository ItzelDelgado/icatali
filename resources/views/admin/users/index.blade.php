<x-admin-layout>
    @section('title', 'Usuarios')
    <div class="mt-2">
        <h1 class="text-2xl font-medium text-gray-800">Lista de Usuarios</h1>
    </div>

    <div class="flex justify-end mb-4">
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-600 dark:focus:ring-blue-800"
            href="{{ route('admin.users.create') }}"><i class="fa-solid fa-plus pr-1"></i> Agregar</a>
    </div>


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre Completo del usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre de Usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Roles
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Visibilidad en el sitio
                    </th> <!-- Nueva columna para el estado -->
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            @if ($user->is_active)
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Sí
                                </div>
                            @else
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> No
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-600 dark:focus:ring-blue-800"
                                    href="{{ route('admin.users.edit', $user) }}"> <i class="fa-solid fa-pen pr-1"></i>
                                    Editar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>



</x-admin-layout>
