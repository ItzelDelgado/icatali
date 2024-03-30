<x-admin-layout>
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo comentario</h1>
    </div>
    <form action="{{ route('admin.comentarios.store') }}" 
    method="POST" 
    enctype="multipart/form-data"
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
        <div class="flex justify-end">
            <x-button>
                Crear comentario
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
