<x-admin-layout>
    @section('title', 'Roles')
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Editar rol</h1>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.roles.update', $role) }}" method="POST">
            @csrf
            @method('PUT')
            <x-validation-errors class="mb-4"/>
            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del rol
                </x-label>
                <x-input class="w-full"
                    name="name"
                    placeholder="Ingrese el nombre el rol"
                    value="{{old('name', $role->name)}}" />
            </div>
            <div class="mb-4">
                <ul>
                    @foreach ($permissions as $permission)
                        <li>
                            <label>
                                <x-checkbox type="checkbox"
                                    name="permissions[]"
                                    value="{{$permission->id}}"
                                    :checked="in_array($permission->id, old('permissions', $role->permissions->pluck('id')->toArray()))">
                                </x-checkbox>
                                    {{$permission->name}}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex gap-2">
                <x-button>
                    Actualizar rol
                </x-button>
                <x-danger-button onclick="deleteRole()">
                    Eliminar
                </x-danger-button>
            </div>
        </form>
        <form action="{{route('admin.roles.destroy', $role)}}"
            method="POST"
            id="formDelete">

            @csrf
            @method('DELETE')
        </form>
    </div>
    @push('js')
        <script>
            function deleteRole(){
                let form = document.getElementById('formDelete');
                form.submit();
            }
        </script>
    @endpush
</x-admin-layout>
