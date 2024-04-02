<x-admin-layout>
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo producto</h1>
    </div>
    <form action="{{ route('admin.productos.store') }}" method="POST" class="bg-white rounded-lg p-6 shadow-lg">
        @csrf

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input value="{{ old('nombre') }}" name="nombre" class="w-full"
                placeholder="Escriba el nombre del producto" />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Descripción
            </x-label>
            <textarea class="border-2 border-solid w-full resize-x overflow-auto h-20" name="descripcion"
                placeholder="Escriba una descripción del producto">{{ old('descripcion') }}</textarea>
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Beneficios
            </x-label>
            <x-input value="{{ old('beneficio') }}" name="beneficio" class="w-full"
                placeholder="Escriba un beneficio para este producto" />
        </div>
        {{-- <div class="mb-4">
            <x-label class="mb-2">
                Ingredientes
            </x-label>
            <x-input value="{{ old('ingrediente') }}" name="ingrediente" class="w-full"
                placeholder="Escriba un ingrediente para este producto" />
        </div> --}}
        {{-- <div id="ingredientes-container">
            @php
                $ingredientes = old('ingredientes') ? old('ingredientes') : [old('ingredientes.0', '')];
            @endphp
            @foreach ($ingredientes as $key => $ingrediente)
                <div class="mb-4">
                    <label class="mb-2">Ingrediente</label>
                    <input name="ingredientes[]" value="{{ $ingrediente }}" class="w-full"
                        placeholder="Escriba un ingrediente para este producto">
                    @if ($key > 0)
                        <button type="button" class="eliminar-ingrediente">-</button>
                    @endif
                </div>
            @endforeach
        </div>
        <button type="button" id="agregar-ingrediente">+</button> --}}

        <div id="ingredientes-container">
        </div>
        <button type="button" id="agregar-ingrediente">+</button>
        <div class="mb-4">
            <x-label class="mb-2">
                Precio
            </x-label>
            <x-input value="{{ old('precio') }}" name="precio" class="w-full"
                placeholder="Escriba el precio de este producto" />
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Precio con descuento
            </x-label>
            <x-input value="{{ old('precio_descuento') }}" name="precio_descuento" class="w-full"
                placeholder="Escriba el precio con descuento de este producto" />
        </div>

        <div class="flex justify-end">
            <x-button>
                Agregar producto
            </x-button>
        </div>
    </form>

    @push('js')
        {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Recuperar elementos de localStorage al cargar la página
            var ingredientesGuardados = JSON.parse(localStorage.getItem('ingredientes'));
            if (ingredientesGuardados) {
                var ultimoAgregado = false; // Variable para verificar si el último ingrediente ya se agregó
                ingredientesGuardados.forEach(function(ingrediente, index) {
                    // Agregar el ingrediente si es el primero o si no es el último y el último no se ha agregado aún
                    if (index === 0 || (!ultimoAgregado && index !== ingredientesGuardados.length - 1)) {
                        agregarIngrediente(ingrediente);
                    }
                    // Marcar que el último ingrediente se ha agregado
                    if (index === ingredientesGuardados.length - 1) {
                        ultimoAgregado = true;
                    }
                });
            }

            // Agregar evento de clic al botón de agregar ingrediente
            document.getElementById("agregar-ingrediente").addEventListener("click", function() {
                agregarIngrediente('');
            });

            // Agregar evento de clic a los botones de eliminar ingrediente
            document.addEventListener("click", function(event) {
                if (event.target.classList.contains("eliminar-ingrediente")) {
                    event.target.parentNode.remove();
                    guardarIngredientesEnLocalStorage();
                }
            });

            // Función para agregar un nuevo campo de entrada de ingrediente
            function agregarIngrediente(valor) {
                var container = document.getElementById("ingredientes-container");
                var nuevoInput = document.createElement("div");
                nuevoInput.className = "mb-4";
                nuevoInput.innerHTML =
                    '<label class="mb-2">Ingrediente</label><input name="ingredientes[]" value="' + valor +
                    '" class="w-full" placeholder="Escriba un ingrediente para este producto"><button type="button" class="eliminar-ingrediente">-</button>';
                container.appendChild(nuevoInput);
                guardarIngredientesEnLocalStorage();
            }

            // Función para guardar los ingredientes en el almacenamiento local
            function guardarIngredientesEnLocalStorage() {
                var ingredientes = [];
                document.querySelectorAll('#ingredientes-container input[name="ingredientes[]"]').forEach(function(
                    input) {
                    ingredientes.push(input.value);
                });
                localStorage.setItem('ingredientes', JSON.stringify(ingredientes));
            }
        });
    </script> --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var container = document.getElementById("ingredientes-container");

                // Función para agregar un nuevo campo de entrada de ingrediente
                function agregarIngrediente(valor) {
                    var nuevoInput = document.createElement("div");
                    nuevoInput.className = "mb-4";
                    nuevoInput.innerHTML =
                        '<label class="mb-2">Ingrediente</label><input name="ingredientes[]" value="' + valor +
                        '" class="w-full" placeholder="Escriba un ingrediente para este producto"><button type="button" class="eliminar-ingrediente">-</button>';
                    container.appendChild(nuevoInput);
                }

                // Agregar evento de clic al botón de agregar ingrediente
                document.getElementById("agregar-ingrediente").addEventListener("click", function() {
                    agregarIngrediente('');
                });

                // Agregar evento de clic a los botones de eliminar ingrediente
                document.addEventListener("click", function(event) {
                    if (event.target.classList.contains("eliminar-ingrediente")) {
                        event.target.parentNode.remove();
                    }
                });

                // Verificar y cargar campos dinámicos guardados en el almacenamiento local al cargar la página
                var ingredientesGuardados = JSON.parse(localStorage.getItem("ingredientes"));
                if (ingredientesGuardados) {
                    ingredientesGuardados.forEach(function(valor) {
                        agregarIngrediente(valor);
                    });
                }
            });

            // Guardar campos dinámicos agregados en el almacenamiento local antes de recargar la página
            window.addEventListener("beforeunload", function() {
                var ingredientes = [];
                var inputs = document.querySelectorAll('[name="ingredientes[]"]');
                inputs.forEach(function(input) {
                    ingredientes.push(input.value);
                });
                localStorage.setItem("ingredientes", JSON.stringify(ingredientes));
            });
        </script>
    @endpush

</x-admin-layout>
