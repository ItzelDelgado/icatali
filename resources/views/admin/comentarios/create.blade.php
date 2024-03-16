<x-admin-layout>
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo comentario</h1>
    </div>
    <form action="{{ route('admin.comentarios.store') }}" method="POST" class="bg-white rounded-lg p-6 shadow-lg">
        @csrf

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Alias
            </x-label>
            <x-input value="{{old('alias')}}" name="alias" class="w-full" placeholder="Escriba el nombre del autor del comentario." />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Comentario
            </x-label>
            <textarea class="border-2 border-solid w-full resize-x overflow-auto h-20" name="comentario">{{ old('comentario') }}</textarea>
        </div>
        <div>
            <figure>
                <img src="{{$post}}" alt="">
            </figure>
        </div>
        <div class="flex justify-end">
            <x-button>
                Crear comentario
            </x-button>
        </div>
    </form>
</x-admin-layout>