<x-admin-layout>
    <div class="m-4">
        <h1 class="text-2xl font-medium text-gray-800">Editar comentario</h1>
    </div>
    <form action="{{ route('admin.comentarios.update', $comentario) }}" 
    method="POST" 
    enctype="multipart/form-data"
        class="bg-white rounded-lg p-6 shadow-lg">
        @csrf
        @method('PUT')
        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Alias
            </x-label>
            <x-input value="{{ old('alias', $comentario->alias) }}" name="alias" class="w-full"
                placeholder="Escriba el nuevo nombre del autor del comentario." />
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Comentario
            </x-label>
            <textarea class="border-2 border-solid w-full resize-x overflow-auto h-20" name="comentario">{{ old('comentario', $comentario->comentario) }}</textarea>
        </div>

        {{-- <div class="mb-4">
            <figure class="py-4">
                <img id="imgPreview" class="object-cover object-center max-w-96" src="{{ $comentario->image }}">
            </figure>
            <div class="top-8 right-8">
                <label class="bg-slate-700 text-white px-4 py-2 rounded-lg cursor-pointer">
                    <i class="fa-solid fa-camera px-3 py-2"></i>
                    Actualizar imagen
                    <input type="file" accept="image/*" name="image" class="hidden"
                        onchange="previewImage(event, '#imgPreview')">
                </label>
                {{-- <img class="py-2" id="imgPreview"> 
            </div>
        </div> --}}

        <div>
            {{-- <figure>
                <img class="aspect-[9/16] object-cover object-center max-w-36 mx-auto">
            </figure> --}}

            <label class="bg-slate-700 text-white px-4 py-2 rounded-lg cursor-pointer">
                <i class="fa-solid fa-camera px-3 py-2"></i>
                Agregar imagen
                <input type="file" accept="image/*" name="image" class="hidden"
                    onchange="previewImage(event, '#imgPreview')">
            </label>
            <img class="py-2" id="imgPreview">

        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Estado
            </x-label>
            <input name="is_active" type="hidden" value="0">
            <label class="relative inline-flex items-center cursor-pointer">
                <input name="is_active" type="checkbox" value="1" class="sr-only peer"
                    @checked(old('is_active', $comentario->is_active) == 1)>
                <div
                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activar</span>
            </label>
        </div>
        <div class="flex justify-end">
            <x-button>
                Actualizar comentario
            </x-button>
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
        </script>
    @endpush

</x-admin-layout>
