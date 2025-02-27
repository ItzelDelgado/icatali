<x-admin-layout>
    @section('title', 'Preguntas Frecuentes')
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nueva pregunta</h1>
    </div>
    <form action="{{ route('admin.preguntas_frecuentes.store') }}"
    method="POST"
    class="bg-white rounded-lg p-6 shadow-lg">
        @csrf

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Pregunta
            </x-label>
            <x-input value="{{ old('pregunta') }}" name="pregunta" class="w-full"
                placeholder="Escriba la pregunta." />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Respuesta
            </x-label>
            <textarea class="border-2 border-solid w-full resize-x overflow-auto h-20" name="respuesta">{{ old('respuesta') }}</textarea>
        </div>
        <div class="flex gap-8 justify-end">
            <a class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-600 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{ route('admin.preguntas_frecuentes.index') }}">Cancelar</a>
            <x-button>
                Agregar pregunta
            </x-button>
        </div>
        <div class="flex justify-end mt-4">
            <p class="w-72 text-xs  text-gray-600">Nota: Al crear una nueva pregunta frecuente, esta se generará en un
                estado inactivo por defecto. Para publicarla, deberá
                editar la pregunta frecuente y cambiar el estado a activo.</p>
        </div>
    </form>

</x-admin-layout>
