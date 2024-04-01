<x-admin-layout>
    <div class="mt-2">
        <h1 class="text-2xl font-medium text-gray-800">Preguntas frecuentes</h1>
    </div>

    <div class="flex justify-end mb-4">
        <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{route('admin.preguntas_frecuentes.create')}}">
            <i class="fa-solid fa-plus text-zinc-50 pr-2"></i>
            Agregar
        </a>
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
                    <th scope="col" class="px-6 py-3">
                        Estatus
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($preguntas_frecuentes as $pregunta_frecuente)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $pregunta_frecuente->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $pregunta_frecuente->pregunta }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $pregunta_frecuente->respuesta }}
                    </td>

                    <td class="px-6 py-4">
                        @if ($pregunta_frecuente->is_active)
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
                        <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ route('admin.preguntas_frecuentes.edit', $pregunta_frecuente) }}">
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
        {{$preguntas_frecuentes->links()}}
    </div>



</x-admin-layout>