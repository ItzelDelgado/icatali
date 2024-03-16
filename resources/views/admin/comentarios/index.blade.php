<x-admin-layout>
    <div class="mt-2">
        <h1 class="text-2xl font-medium text-gray-800">Comentarios</h1>
    </div>

    <div class="flex justify-end mb-4">
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{route('admin.comentarios.create')}}">Agregar</a>
    </div>
    <ul class="space-y-8">


    </ul>

    {{-- <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alias
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Comentario
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estatus
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $comentario->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $comentario->alias }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $comentario->comentario }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $comentario->img_path }}
                        </td>

                        <td class="px-6 py-4">
                            @if ($comentario->is_active)
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Activo
                                </div>
                            @else
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Inactivo
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.comentarios.edit', $comentario) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}

    <div class="mt-4">
        {{$comentarios->links()}}
    </div>



</x-admin-layout>
