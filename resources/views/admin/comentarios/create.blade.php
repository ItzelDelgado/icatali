<x-admin-layout>
    @section('title', 'Comentarios')
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo comentario</h1>
    </div>
    <form action="{{ route('admin.comentarios.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white rounded-lg p-6 shadow-lg">
        @csrf

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Alias
            </x-label>
            <x-input value="{{ old('alias') }}" name="alias" class="w-full"
                placeholder="Escriba el nombre del autor del comentario." />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Comentario
            </x-label>
            <textarea class="border-2 border-solid w-full resize-x overflow-auto h-20" name="comentario">{{ old('comentario') }}</textarea>
        </div>
        <div>
            <label class="bg-slate-700 text-white px-4 py-2 rounded-lg cursor-pointer">
                <i class="fa-solid fa-camera px-3 py-2"></i>
                Agregar imagen
                <input type="file" accept="image/*" name="image" class="hidden"
                    onchange="previewImage(event, '#imgPreview')">
            </label>
            <img class="py-2" id="imgPreview">
            <button type="button" onclick="removeImagePreview('#imgPreview')" class="text-red-500">Eliminar
                imagen</button>
        </div>

        <div class="flex gap-8 justify-end">
            <a class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-600 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{ route('admin.comentarios.index') }}">Cancelar</a>
            <x-button>
                Crear comentario
            </x-button>
        </div>
        <div class="flex justify-end mt-4">
            <p class="w-72 text-xs  text-gray-600">Nota: Al crear un nuevo comentario, este se generará en un
                estado inactivo por defecto. Para publicarlo, deberá
                editar el comentario y cambiar el estado a activo.</p>
        </div>
    </form>
    @push('js')
        <script>
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

            function removeImagePreview(querySelector) {
                // Recuperamos la etiqueta img donde cargamos la imagen
                const imgPreview = document.querySelector(querySelector);

                // Vaciamos el atributo src de la etiqueta img
                imgPreview.src = "";

                // Limpiamos el valor del campo de entrada de archivos
                const inputFile = document.querySelector('input[type="file"]');
                inputFile.value = "";
            }
        </script>
    @endpush
</x-admin-layout>
