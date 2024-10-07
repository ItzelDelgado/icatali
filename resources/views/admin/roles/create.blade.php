<x-admin-layout>
    @section('title', 'Roles')
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo rol</h1>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.roles.store') }}" method="POST">
            @csrf
            <x-validation-errors class="mb-4"/>
            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del rol
                </x-label>
                <x-input class="w-full"
                    name="name"
                    placeholder="Ingrese el nombre el rol"
                    value="{{old('name')}}" />
            </div>
            <div class="mb-4">
                <ul>
                    @foreach ($permissions as $permission)
                        <li>
                            <label>
                                <x-checkbox type="checkbox"
                                    name="permissions[]"
                                    value="{{$permission->id}}"
                                    :checked="in_array($permission->id, old('permissions',[]))">
                                </x-checkbox>
                                    {{$permission->name}}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <x-button>
                Crear rol
            </x-button>
        </form>
    </div>
</x-admin-layout>
