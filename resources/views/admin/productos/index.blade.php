<x-admin-layout>
    <div class="mt-2">
        <h1 class="text-2xl font-medium text-gray-800">Productos</h1>
    </div>

    <div class="flex justify-end mb-4">
        <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            href="{{ route('admin.productos.create') }}">
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
                        Nombre
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Detalles
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $producto->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $producto->nombre }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $producto->descripcion }}
                        </td>

                        <td class="px-6 py-4">
                            @if ($producto->is_active)
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Activo
                                </div>
                            @else
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Inactivo
                                </div>
                            @endif
                        </td>
                        {{-- <td class="px-6 py-4 w-[10%]">
                            <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.productos.show', $producto) }}">
                                <i class="fa-solid fa-pencil text-zinc-50 pr-2"></i>
                                Ver
                            </a>
                        </td> --}}

                        <td class="px-6 py-4 w-[10%]">
                            <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.productos.edit', $producto) }}">
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
        {{ $productos->links() }}
    </div>


    @push('js')
        <script>
            // Limpiar almacenamiento local al iniciar sesión
            function limpiarAlmacenamientoLocal() {
                localStorage.removeItem('ingredientes');
                localStorage.removeItem('beneficios');
            }

            // Llamar a la función de limpieza al iniciar sesión
            // Por ejemplo, podrías llamar a esta función cuando se envíe el formulario de inicio de sesión
            // o cuando se complete el proceso de inicio de sesión correctamente.
            // Aquí es donde debes integrar la llamada a esta función según tu flujo de inicio de sesión.
            limpiarAlmacenamientoLocal();
        </script>
    @endpush
</x-admin-layout>
