<x-admin-layout>
    @section('title', 'Productos')
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
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Precio</th>
                    <th scope="col" class="px-6 py-3">Precio con Descuento</th>
                    <th scope="col" class="px-6 py-3">Visibilidad en el sitio</th>
                    <th scope="col" class="px-6 py-3">Vista del producto</th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $producto->nombre }}</td>
                        <td class="px-6 py-4">{{ number_format($producto->precio, 2) }} MXN</td>
                        <td class="px-6 py-4">
                            @if ($producto->precio_descuento)
                                {{ number_format($producto->precio_descuento, 2) }} MXN
                            @else
                                <span class="text-gray-500">No aplica</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if ($producto->is_active)
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Sí
                                </div>
                            @else
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> No
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 hover:text-blue-700"><a target="_blank" href="{{ $producto->url_edicion }}">{{ $producto->url_edicion }}</a></td>
                        <td class="px-6 py-4 w-[10%]">
                            <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.productos.edit', $producto) }}">
                                <i class="fa-solid fa-pencil text-zinc-50 pr-2"></i> Editar
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
</x-admin-layout>
