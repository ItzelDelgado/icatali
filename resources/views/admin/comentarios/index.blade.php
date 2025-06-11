<x-admin-layout>
    @section('title', 'Comentarios')
    <div class="mt-2 flex items-center gap-2">
        <h1 class="text-2xl font-medium text-gray-800">Comentarios</h1>
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm.053 17c.466 0 .844-.378.844-.845 0-.466-.378-.844-.844-.844-.466 0-.845.378-.845.844 0 .467.379.845.845.845zm.468-2.822h-.998c-.035-1.162.182-2.054.939-2.943.491-.57 1.607-1.479 1.945-2.058.722-1.229.077-3.177-2.271-3.177-1.439 0-2.615.877-2.928 2.507l-1.018-.102c.28-2.236 1.958-3.405 3.922-3.405 1.964 0 3.615 1.25 3.615 3.22 0 1.806-1.826 2.782-2.638 3.868-.422.563-.555 1.377-.568 2.09z"/></svg>
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
                        Autor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Comentario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Visibilidad en el sitio
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

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
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Sí
                                </div>
                            @else
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> No
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
