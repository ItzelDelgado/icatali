<x-admin-layout>
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo producto</h1>
    </div>
    <form action="{{ route('admin.productos.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white rounded-lg p-6 shadow-lg">
        @csrf


        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input value="{{ old('nombre') }}" name="nombre" class="w-full"
                placeholder="Escriba el nombre del producto" />
            @error('nombre')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Descripción
            </x-label>
            <div class="ckeditor">
                <textarea id="editor" class="border-2 border-solid w-full resize-x overflow-auto h-20" name="descripcion"
                    placeholder="Escriba una descripción del producto">{{ old('descripcion') }}</textarea>
            </div>
            @error('descripcion')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
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
        {{-- <button type="button" id="agregar-ingrediente">Agregar ingrediente <i class="fa-solid fa-plus text-slate-900 pr-2"></i></button> --}}
        <div class="mb-4">
            <a id="agregar-ingrediente"
                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <i class="fa-solid fa-plus text-zinc-50 pr-2"></i>
                Agregar ingrediente

            </a>
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Precio
            </x-label>
            <x-input value="{{ old('precio') }}" type="number" step="0.001" name="precio" class="w-full"
                placeholder="Escriba el precio de este producto" />
            @error('precio')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Precio con descuento
            </x-label>
            <x-input value="{{ old('precio_descuento') }}" type="number" name="precio_descuento" class="w-full"
                placeholder="Escriba el precio con descuento de este producto" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-[800px] mx-auto gap-3">
            <!-- Agregar imagen principal -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Agregar imagen principal
                    <input type="file" accept="image/*" id="imagePrincipal" name="imagePrincipal" value=""
                        class="hidden image-preview" onchange="previewImage(event, '#imgPreviewPrincipal')">
                </label>
                <img class="py-2 w-full h-[350px] object-cover" id="imgPreviewPrincipal">
                <button type="button" onclick="removeImagePreview('#imgPreviewPrincipal', 'imagePrincipal')"
                    class="text-red-500">Eliminar
                    imagen</button>
            </div>

            <!-- Agregar imagen de empaque -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Agregar imagen de empaque
                    <input type="file" accept="image/*" id="imageEmpaque" name="imageEmpaque" class="hidden"
                        onchange="previewImage(event, '#imgPreviewEmpaque')">
                </label>
                <img class="image-preview py-2 w-full h-[350px] object-cover" id="imgPreviewEmpaque">
                <button type="button" onclick="removeImagePreview('#imgPreviewEmpaque', 'imageEmpaque')"
                    class="text-red-500">Eliminar
                    imagen</button>
            </div>

            <!-- Agregar imagen de lateral izquierdo -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Agregar imagen de lateral izquierdo
                    <input type="file" accept="image/*" id="imageIzq" name="imageIzq" class="hidden"
                        onchange="previewImage(event, '#imgPreviewIzq')">
                </label>
                <img class="image-preview py-2 w-full h-[350px] object-cover" id="imgPreviewIzq">
                <button type="button" onclick="removeImagePreview('#imgPreviewIzq', 'imageIzq')"
                    class="text-red-500">Eliminar
                    imagen</button>
            </div>

            <!-- Agregar imagen de lateral derecho -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Agregar imagen de lateral derecho
                    <input type="file" accept="image/*" id="imageDer" name="imageDer" class="hidden"
                        onchange="previewImage(event, '#imgPreviewDer')">
                </label>
                <img class="image-preview py-2 w-full h-[350px] object-cover" id="imgPreviewDer">
                <button type="button" onclick="removeImagePreview('#imgPreviewDer', 'imageDer')"
                    class="text-red-500">Eliminar
                    imagen</button>
            </div>
        </div>
        <div class="flex justify-end">
            <x-button>
                Agregar producto
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
                        '" class="w-full mr-2 py-2 px-4 rounded-md border-gray-300" placeholder="Escriba un ingrediente para este producto">' +
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

                // Cargar ingredientes desde el almacenamiento local al cargar la página
                let ingredientesGuardados = JSON.parse(localStorage.getItem("ingredientes"));
                if (ingredientesGuardados) {
                    ingredientesGuardados.forEach(function(valor) {
                        agregarIngrediente(valor);
                    });
                }

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

                // Cargar ingredientes desde el almacenamiento local al cargar la página
                let beneficiosGuardados = JSON.parse(localStorage.getItem("beneficios"));
                if (beneficiosGuardados) {
                    beneficiosGuardados.forEach(function(valor) {
                        agregarBeneficio(valor);
                    });
                }

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


            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush

</x-admin-layout>
