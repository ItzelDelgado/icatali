<x-admin-layout>
    @section('title', 'Productos')
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/vendor/ckeditor5.css') }}">
    @endpush

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
                Slug
            </x-label>
            <x-input value="{{ old('slug') }}" name="slug" class="w-full"
                placeholder="Escriba el nombre del slug" />
            @error('slug')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Otros datos
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
            <x-input value="{{ old('precio_descuento') }}" type="number" step="0.001" name="precio_descuento"
                class="w-full" placeholder="Escriba el precio con descuento de este producto" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-[800px] mx-auto gap-3">
            <!-- Agregar imagen principal -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Imagen sin fondo
                    <input type="file" accept="image/*" id="imagePrincipal" name="imagePrincipal" value=""
                        class="hidden image-preview" onchange="previewImage(event, '#imgPreviewPrincipal')">
                </label>
                <img class="py-2 w-full h-[350px] object-cover" id="imgPreviewPrincipal">
                <div class="text-sm">
                    <p>Esta imagen se carga en la página de productos.</p>
                </div>
                <button type="button" onclick="removeImagePreview('#imgPreviewPrincipal', 'imagePrincipal')"
                    class="text-red-500">Eliminar
                    imagen</button>

            </div>

            <!-- Agregar imagen de empaque -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Primera imagen de empaque
                    <input type="file" accept="image/*" id="imageEmpaque" name="imageEmpaque" class="hidden"
                        onchange="previewImage(event, '#imgPreviewEmpaque')">
                </label>
                <img class="image-preview py-2 w-full h-[350px] object-cover" id="imgPreviewEmpaque">
                <div class="text-sm">
                    <p>Esta imagen se carga en la información detalla del producto</p>
                </div>
                <button type="button" onclick="removeImagePreview('#imgPreviewEmpaque', 'imageEmpaque')"
                    class="text-red-500">Eliminar
                    imagen</button>
            </div>

            <!-- Agregar imagen de lateral izquierdo -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Segunda imagen de empaque
                    <input type="file" accept="image/*" id="imageIzq" name="imageIzq" class="hidden"
                        onchange="previewImage(event, '#imgPreviewIzq')">
                </label>
                <img class="image-preview py-2 w-full h-[350px] object-cover" id="imgPreviewIzq">
                <div class="text-sm">
                    <p>Esta imagen se carga en la información detalla del producto</p>
                </div>
                <button type="button" onclick="removeImagePreview('#imgPreviewIzq', 'imageIzq')"
                    class="text-red-500">Eliminar
                    imagen</button>
            </div>

            <!-- Agregar imagen de lateral derecho -->
            <div>
                <label
                    class="bg-slate-700 text-white px-4 py-0 rounded-lg cursor-pointer flex items-center justify-center p-0">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Imagen de portada
                    <input type="file" accept="image/*" id="imageDer" name="imageDer" class="hidden"
                        onchange="previewImage(event, '#imgPreviewDer')">
                </label>
                <img class="image-preview py-2 w-full h-[350px] object-cover" id="imgPreviewDer">
                <div class="text-sm">
                    <p>Esta imagen se carga en la página de inicio del sitio web (página principal)</p>
                </div>
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
        <script type="module">
            import {
                ClassicEditor,
                AccessibilityHelp,
                Alignment,
                Autoformat,
                AutoImage,
                Autosave,
                Bold,
                CloudServices,
                Essentials,
                Heading,
                ImageBlock,
                ImageCaption,
                ImageInline,
                ImageInsertViaUrl,
                ImageResize,
                ImageStyle,
                ImageTextAlternative,
                ImageToolbar,
                ImageUpload,
                Indent,
                IndentBlock,
                Italic,
                Link,
                LinkImage,
                List,
                ListProperties,
                Paragraph,
                PasteFromOffice,
                SelectAll,
                Strikethrough,
                Subscript,
                Superscript,
                Table,
                TableCaption,
                TableCellProperties,
                TableColumnResize,
                TableProperties,
                TableToolbar,
                TextTransformation,
                TodoList,
                Underline,
                Undo
            } from 'ckeditor5';

            ClassicEditor.create(document.querySelector('#editor'), {
                    // Configuración de plugins
                    plugins: [
                        AccessibilityHelp,
                        Alignment,
                        Autoformat,
                        AutoImage,
                        Autosave,
                        Bold,
                        CloudServices,
                        Essentials,
                        Heading,
                        ImageBlock,
                        ImageCaption,
                        ImageInline,
                        ImageInsertViaUrl,
                        ImageResize,
                        ImageStyle,
                        ImageTextAlternative,
                        ImageToolbar,
                        ImageUpload,
                        Indent,
                        IndentBlock,
                        Italic,
                        Link,
                        LinkImage,
                        List,
                        ListProperties,
                        Paragraph,
                        PasteFromOffice,
                        SelectAll,
                        Strikethrough,
                        Subscript,
                        Superscript,
                        Table,
                        TableCaption,
                        TableCellProperties,
                        TableColumnResize,
                        TableProperties,
                        TableToolbar,
                        TextTransformation,
                        TodoList,
                        Underline,
                        Undo
                    ],

                    // Configuración de la barra de herramientas
                    toolbar: {
                        items: [
                            'undo',
                            'redo',
                            '|',
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'underline',
                            'strikethrough',
                            'subscript',
                            'superscript',
                            '|',
                            'link',
                            'insertTable',
                            '|',
                            'alignment',
                            '|',
                            'bulletedList',
                            'numberedList',
                            'todoList',
                            'outdent',
                            'indent'
                        ],
                        shouldNotGroupWhenFull: false
                    },

                    // Configuración adicional
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            },
                            {
                                model: 'heading3',
                                view: 'h3',
                                title: 'Heading 3',
                                class: 'ck-heading_heading3'
                            },
                            {
                                model: 'heading4',
                                view: 'h4',
                                title: 'Heading 4',
                                class: 'ck-heading_heading4'
                            },
                            {
                                model: 'heading5',
                                view: 'h5',
                                title: 'Heading 5',
                                class: 'ck-heading_heading5'
                            },
                            {
                                model: 'heading6',
                                view: 'h6',
                                title: 'Heading 6',
                                class: 'ck-heading_heading6'
                            }
                        ]
                    },
                    image: {
                        toolbar: [
                            'toggleImageCaption',
                            'imageTextAlternative',
                            '|',
                            'imageStyle:inline',
                            'imageStyle:wrapText',
                            'imageStyle:breakText',
                            '|',
                            'resizeImage'
                        ]
                    },
                    list: {
                        properties: {
                            styles: true,
                            startIndex: true,
                            reversed: true
                        }
                    },
                    placeholder: 'Type or paste your content here!',
                    table: {
                        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties',
                            'tableCellProperties'
                        ]
                    },
                    language: 'es',
                    link: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        decorators: {
                            toggleDownloadable: {
                                mode: 'manual',
                                label: 'Downloadable',
                                attributes: {
                                    download: 'file'
                                }
                            }
                        }
                    },
                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
        <!-- A friendly reminder to run on a server, remove this during the integration. -->
        <script>
            window.onload = function() {
                if (window.location.protocol === "file:") {
                    alert("This sample requires an HTTP server. Please serve this file with a web server.");
                }
            };
        </script>

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
        </script>
    @endpush

</x-admin-layout>
