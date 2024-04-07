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
            <a id="agregar-beneficio"
                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <i class="fa-solid fa-plus text-zinc-50 pr-2"></i>
                Agregar beneficio
            </a>
        </div>

        <div id="ingredientes-container">
            <p>Ingredientes</p>
        </div>

        <div class="mb-4">
            <a id="agregar-ingrediente"
                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <i class="fa-solid fa-plus text-zinc-50 pr-2"></i>
                Agregar ingrediente
            </a>
        </div>
        <div>

            <label class="bg-slate-700 text-white px-4 py-2 rounded-lg cursor-pointer">
                <i class="fa-solid fa-camera px-3 py-2"></i>
                Actualizar imagen principal
                <input type="file" accept="image/*" id="imagePrincipal" name="imagePrincipal" class="hidden"
                    onchange="previewImage(event, '#imgPreviewPrincipal')">
            </label>
            <img src="{{ $producto->image }}" class="py-2" id="imgPreviewPrincipal">
            <button type="button" onclick="removeImagePreview('#imgPreviewPrincipal', 'imagePrincipal')"
                class="text-red-500">Eliminar
                imagen</button>
        </div>

        <div>

            <label class="bg-slate-700 text-white px-4 py-2 rounded-lg cursor-pointer">
                <i class="fa-solid fa-camera px-3 py-2"></i>
                Actualizar imagen de empaque
                <input type="file" accept="image/*" id="imageEmpaque" name="imageEmpaque" class="hidden"
                    onchange="previewImage(event, '#imgPreviewEmpaque')">
            </label>
            <img src="{{ $producto->image_pa }}" class="py-2" id="imgPreviewEmpaque">
            <button type="button" onclick="removeImagePreview('#imgPreviewEmpaque', 'imageEmpaque')"
                class="text-red-500">Eliminar
                imagen</button>
        </div>

        <div>

            <label class="bg-slate-700 text-white px-4 py-2 rounded-lg cursor-pointer">
                <i class="fa-solid fa-camera px-3 py-2"></i>
                Actualizar imagen de lateral izquierdo
                <input type="file" accept="image/*" id="imageIzq" name="imageIzq" class="hidden"
                    onchange="previewImage(event, '#imgPreviewIzq')">
            </label>
            <img src="{{ $producto->image_izq }}" class="py-2" id="imgPreviewIzq">
            <button type="button" onclick="removeImagePreview('#imgPreviewIzq', 'imageIzq')"
                class="text-red-500">Eliminar
                imagen</button>
        </div>
        <div>
            <label class="bg-slate-700 text-white px-4 py-2 rounded-lg cursor-pointer">
                <i class="fa-solid fa-camera px-3 py-2"></i>
                Actualizar imagen de lateral derecho
                <input type="file" accept="image/*" id="imageDer" name="imageDer" class="hidden"
                    onchange="previewImage(event, '#imgPreviewDer')">
            </label>
            <img src="{{ $producto->image_der }}" class="py-2" id="imgPreviewDer">
            <button type="button" onclick="removeImagePreview('#imgPreviewDer', 'imageDer')"
                class="text-red-500">Eliminar
                imagen</button>
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
                        '<button type="button" class="eliminar-ingrediente"><i class="fa-solid fa-trash-can"></i></button>' +
                        '</div>';

                    // Agregar evento de clic al botón de eliminar del nuevo input
                    nuevoInput.querySelector(".eliminar-ingrediente").addEventListener("click", function() {
                        nuevoInput.remove();
                        guardarIngredientes();
                    });

                    container.appendChild(nuevoInput);
                }

                // Agregar evento de clic al botón de agregar ingrediente
                document.getElementById("agregar-ingrediente").addEventListener("click", function() {
                    agregarIngrediente('');
                });

                // Cargar beneficios desde el producto al cargar la página
                let ingredientesProducto = "{{ $producto->ingredientes }}";
                let ingredientesArray = ingredientesProducto.split(",");
                ingredientesArray.forEach(function(valor) {
                    agregarIngrediente(valor);
                });

                // Función para guardar ingredientes en el almacenamiento local
                function guardarIngredientes() {
                    let ingredientes = [];
                    let inputs = document.querySelectorAll('[name="ingredientes[]"]');
                    inputs.forEach(function(input) {
                        ingredientes.push(input.value);
                    });
                    localStorage.setItem("ingredientes", JSON.stringify(ingredientes));
                }

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
                        '<button type="button" class="eliminar-beneficio"><i class="fa-solid fa-trash-can"></i></button>' +
                        '</div>';

                    // Agregar evento de clic al botón de eliminar del nuevo input
                    nuevoInput.querySelector(".eliminar-beneficio").addEventListener("click", function() {
                        nuevoInput.remove();
                        guardarBeneficios();
                    });

                    container2.appendChild(nuevoInput);
                }

                // Agregar evento de clic al botón de agregar ingrediente
                document.getElementById("agregar-beneficio").addEventListener("click", function() {
                    agregarBeneficio('');
                });

                // Cargar beneficios desde el producto al cargar la página
                let beneficiosProducto = "{{ $producto->beneficios }}";
                let beneficiosArray = beneficiosProducto.split(",");
                beneficiosArray.forEach(function(valor) {
                    agregarBeneficio(valor);
                });

                // Función para guardar ingredientes en el almacenamiento local
                function guardarBeneficios() {
                    let beneficios = [];
                    let inputs = document.querySelectorAll('[name="beneficios[]"]');
                    inputs.forEach(function(input) {
                        beneficios.push(input.value);
                    });
                    localStorage.setItem("beneficios", JSON.stringify(beneficios));
                }

                // Guardar ingredientes en el almacenamiento local antes de recargar la página
                window.addEventListener("beforeunload", function() {
                    guardarBeneficios();
                });
            });

            function previewImage(event, querySelector) {

                //Recuperamos el input que desencadeno la acción
                const input = event.target;

                //Recuperamos la etiqueta img donde cargaremos la imagen
                $imgPreview = document.querySelector(querySelector);

                // Verificamos si existe una imagen seleccionada
                if (!input.files.length) return

                //Recuperamos el archivo subido
                file = input.files[0];

                //Creamos la url
                objectURL = URL.createObjectURL(file);

                //Modificamos el atributo src de la etiqueta img
                $imgPreview.src = objectURL;

            }

            // Función para eliminar la vista previa de la imagen y limpiar el campo de entrada de archivo
            function removeImagePreview(querySelector, id) {
                // Recuperamos la etiqueta img donde cargamos la imagen
                const imgPreview = document.querySelector(querySelector);
                const imgId = document.getElementById(id);

                imgId.value = '';

                // Vaciamos el atributo src de la etiqueta img
                imgPreview.src = "";

                // Limpiamos el valor del campo de entrada de archivos
                const inputFile = imgPreview.previousElementSibling;
                inputFile.value = "";


                // Deshabilitamos el campo de entrada de archivos
                inputFile.disabled = true;
                document.querySelector("#imagePrincipal").removeAttribute('name');
            }

            window.addEventListener('pageshow', function(event) {
                var historyTraversal = event.persisted || (typeof window.performance != 'undefined' && window
                    .performance.navigation.type === 2);
                if (historyTraversal) {
                    // El usuario ha regresado utilizando el botón "Back"
                    // Limpiamos el valor del input tipo file
                    document.getElementById('imagePrincipal').value = '';
                    document.getElementById('imageEmpaque').value = '';
                    document.getElementById('imageIzq').value = '';
                    document.getElementById('imageDer').value = '';

                }
            });

            window.onload = function() {

                let imagen1 = document.getElementById('imgPreviewPrincipal');
                let inputArchivo1 = document.getElementById('imagePrincipal');
                let imagen2 = document.getElementById('imgPreviewEmpaque');
                let inputArchivo2 = document.getElementById('imageEmpaque');
                let imagen3 = document.getElementById('imgPreviewIzq');
                let inputArchivo3 = document.getElementById('imageIzq');                
                let imagen4 = document.getElementById('imgPreviewDer');
                let inputArchivo4 = document.getElementById('imageDer');


                rutaSrc1 = imagen1.src;
                rutaSrc2 = imagen2.src;
                rutaSrc3 = imagen3.src;
                rutaSrc4 = imagen4.src;

                console.log(rutaSrc1);

                // Asignar el valor del atributo src de la imagen al atributo value del input
                // inputArchivo1.value = imagen1.src;
                // inputArchivo2.value = imagen2.src;
                // inputArchivo3.value = imagen3.src;
                // inputArchivo4.value = imagen4.src;
            };
        </script>
    @endpush

</x-admin-layout>
