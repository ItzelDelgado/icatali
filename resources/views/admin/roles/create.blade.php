<x-admin-layout>
    @section('title', 'Roles')
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo rol</h1>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.roles.store') }}" method="POST">
            @csrf
            <x-validation-errors class="mb-4" />
            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del rol
                </x-label>
                <x-input class="w-full" name="name" placeholder="Ingrese el nombre el rol"
                    value="{{ old('name') }}" />
            </div>
            <div class="mb-4">
                <ul>
                    @foreach ($permissions as $permission)
                        <li>
                            <label>
                                <x-checkbox type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                    :checked="in_array($permission->id, old('permissions', []))">
                                </x-checkbox>
                                {{ $permission->name }}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex gap-8 justify-end">
                <a class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-600 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    href="{{ route('admin.roles.index') }}">Cancelar</a>
                <x-button>
                    Crear rol
                </x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
