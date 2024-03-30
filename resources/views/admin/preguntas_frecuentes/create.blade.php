<x-admin-layout>
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
        <div class="flex justify-end">
            <x-button>
                Agregar pregunta
            </x-button>
        </div>
    </form>
   
</x-admin-layout>
