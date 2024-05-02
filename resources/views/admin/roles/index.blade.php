<x-admin-layout>

    <div class="flex justify-end mb-4">
        <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            href="{{ route('admin.roles.create') }}">
            <i class="fa-solid fa-plus text-zinc-50 pr-2"></i>Agregar</a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pregunta
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Respuesta
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $rol->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $rol->name }}
                        </td>

                        <td class="px-6 py-4 w-[10%]">
                            <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.roles.edit', $rol) }}">
                                <i class="fa-solid fa-pencil text-zinc-50 pr-2"></i>
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
