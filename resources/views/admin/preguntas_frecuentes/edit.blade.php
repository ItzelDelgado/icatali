<x-admin-layout>
    @section('title', 'Preguntas Frecuentes')
    <div class="m-4">
        <h1 class="text-2xl font-medium text-gray-800">Editar pregunta frecuente</h1>
    </div>
    <form action="{{ route('admin.preguntas_frecuentes.update', $preguntaFrecuente) }}"
    method="POST"
        class="bg-white rounded-lg p-6 shadow-lg">
        @csrf
        @method('PUT')
        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Pregunta frecuente
            </x-label>
            <x-input value="{{ old('alias', $preguntaFrecuente->pregunta) }}" name="pregunta" class="w-full"
                placeholder="Escriba la pregunta frecuente." />
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Respuesta
            </x-label>
            <textarea class="border-2 border-solid w-full resize-x overflow-auto h-20" name="respuesta">{{ old('respuesta', $preguntaFrecuente->respuesta) }}</textarea>
        </div>


        <div class="mb-4">
            <x-label class="mb-2">
                Estado
            </x-label>
            <input name="is_active" type="hidden" value="0">
            <label class="relative inline-flex items-center cursor-pointer">
                <input name="is_active" type="checkbox" value="1" class="sr-only peer"
                    @checked(old('is_active', $preguntaFrecuente->is_active) == 1)>
                <div
                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activar</span>
            </label>
        </div>
        <div class="flex justify-end">
            <x-button>
                Actualizar pregunta
            </x-button>
        </div>
    </form>
</x-admin-layout>
