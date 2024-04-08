<x-admin-layout>
    <div class="m-4">
        <h1 class="text-2xl font-medium text-gray-800">Editar producto</h1>
    </div>
    <form action="{{ route('admin.productos.update', $producto) }}" method="POST" enctype="multipart/form-data"
        class="bg-white rounded-lg p-6 shadow-lg">
        @csrf
        @method('PUT')
        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input value="{{ old('nombre', $producto->nombre) }}" name="nombre" class="w-full"
                placeholder="Escriba el nombre del producto" />
            @error('nombre')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Descripción
            </x-label>
            <textarea class="border-2 border-solid w-full resize-x overflow-auto h-20" name="descripcion"
                placeholder="Escriba una descripción del producto">{{ old('descripcion', $producto->descripcion) }}</textarea>
            @error('descripcion')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Precio
            </x-label>
            <x-input value="{{ old('precio', $producto->precio) }}" type="number" step="0.001" name="precio"
                class="w-full" placeholder="Escriba el precio de este producto" />
            @error('precio')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Precio con descuento
            </x-label>
            <x-input value="{{ old('precio_descuento', $producto->descripcion_descuento) }}" type="number"
                name="precio_descuento" class="w-full" placeholder="Escriba el precio con descuento de este producto" />
        </div>
        <div id="beneficios-container">
            <p>Beneficios</p>
        </div>

        <div class="mb-4">
            <a id="agregar-beneficio">
            </a>
        </div>

        <div id="ingredientes-container">
            <p>Ingredientes</p>
        </div>

        <div class="mb-4">
            <a id="agregar-ingrediente">
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-[800px] mx-auto gap-3">

            <img src="{{ $producto->image }}" class="w-full h-[350px] object-cover" id="imgPreviewPrincipal">
            <img src="{{ $producto->image_pa }}" class="w-full h-[350px] object-cover" id="imgPreviewEmpaque">

            <img src="{{ $producto->image_izq }}" class="w-full h-[350px] object-cover" id="imgPreviewIzq">
            <img src="{{ $producto->image_der }}" class="w-full h-[350px] object-cover" id="imgPreviewDer">

        </div>



        <div class="mb-4">
            <x-label class="mb-2">
                Estado
            </x-label>
            <input name="is_active" type="hidden" value="0">
            <label class="relative inline-flex items-center cursor-pointer">
                <input name="is_active" type="checkbox" value="1" class="sr-only peer"
                    @checked(old('is_active', $producto->is_active) == 1)>
                <div
                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activar</span>
            </label>
        </div>
        <div class="flex justify-end">
            <x-button>
                Actualizar producto
            </x-button>
        </div>
    </form>

    @push('js')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let container = document.getElementById("ingredientes-container");

                // Función para agregar un nuevo campo de entrada de ingrediente
                function agregarIngrediente(valor) {
                    let nuevoInput = document.createElement("div");
                    nuevoInput.className = "mb-4";
                    nuevoInput.innerHTML =
                        '<div class="flex items-center">' +
                        '<input name="ingredientes[]" value="' + valor +
                        '" class="w-full mr-2 py-2 px-4 rounded-md border-gray-300" placeholder="Escriba un ingrediente de este producto">' +
                        '</div>';

                    container.appendChild(nuevoInput);
                }

                // Cargar beneficios desde el producto al cargar la página
                let ingredientesProducto = "{{ $producto->ingredientes }}";
                let ingredientesArray = ingredientesProducto.split(",");
                ingredientesArray.forEach(function(valor) {
                    agregarIngrediente(valor);
                });


                // Guardar ingredientes en el almacenamiento local antes de recargar la página
                window.addEventListener("beforeunload", function() {
                    guardarIngredientes();
                });

                //************
                let container2 = document.getElementById("beneficios-container");

                // Función para agregar un nuevo campo de entrada de ingrediente
                function agregarBeneficio(valor) {
                    let nuevoInput = document.createElement("div");
                    nuevoInput.className = "mb-4";
                    nuevoInput.innerHTML =
                        '<div class="flex items-center">' +
                        '<input name="beneficios[]" value="' + valor +
                        '" class="w-full mr-2 py-2 px-4 rounded-md border-gray-300" placeholder="Escriba un beneficio de este producto">' +
                        '</div>';

                    container2.appendChild(nuevoInput);
                }

                // Cargar beneficios desde el producto al cargar la página
                let beneficiosProducto = "{{ $producto->beneficios }}";
                let beneficiosArray = beneficiosProducto.split(",");
                beneficiosArray.forEach(function(valor) {
                    agregarBeneficio(valor);
                });

            });
        </script>
    @endpush

</x-admin-layout>
