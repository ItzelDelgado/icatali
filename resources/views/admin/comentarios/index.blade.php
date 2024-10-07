<x-admin-layout>
    @section('title', 'Comentarios')
    <div class="mt-2">
        <h1 class="text-2xl font-medium text-gray-800">Comentarios</h1>
    </div>

    <div class="flex justify-end mb-4">
        <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            href="{{ route('admin.comentarios.create') }}">
            <i class="fa-solid fa-plus text-zinc-50 pr-2"></i>
            Agregar
        </a>
    </div>

    {{-- <ul class="space-y-8">

        @foreach ($comentarios as $comentario)
            <li class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <img class="aspect-[16/9] object-cover object-center w-full" src="{{ $comentario->img_path }}" alt="Imgen de comentario">
                </div>
                <div>
                    {{ $comentario->alias }}
                </div>
            </li>
        @endforeach

    </ul> --}}

    <div class="relative overflow-x-auto">
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
                            class=" w-[7%] px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $comentario->id }}
                        </th>
                        <td class="px-6 py-4 w-[23%]"> {{-- w-[3/12] --}}
                            {{ $comentario->alias }}
                        </td>

                        <td class="px-6 py-4 w-[25%]">
                            {{-- {{ Str::limit($comentario->comentario,100) }} --}}
                            {{ $comentario->comentario }}
                        </td>

                        <td class="px-4 py-2 w-[20%]">
                            {{-- {{ $comentario->img_path }} --}}
                            <img class="object-cover object-center max-w-36 h-40 mx-auto"
                                src="{{ $comentario->image }}" alt="">
                        </td>

                        <td class="px-6 py-4 w-[15%]">
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
                        <td class="px-6 py-4 w-[10%]">
                            <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.comentarios.edit', $comentario) }}">
                                <i class="fa-solid fa-pencil text-zinc-50 pr-2"></i>
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $comentarios->links() }}
    </div>



</x-admin-layout>
