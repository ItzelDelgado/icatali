<x-admin-layout>
    @section('title', 'Usuarios')
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Editar usuario</h1>
    </div>
    <form action="{{ route('admin.users.update', $user) }}" method="POST" class="bg-white rounded-lg p-6 shadow-lg">
        @csrf
        @method('PUT')
        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input value="{{ old('name', $user->name) }}" name="name" class="w-full"
                placeholder="Escriba el nombre del usuario" />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Nombre de Usuario
            </x-label>
            <x-input value="{{ old('email', $user->email) }}" name="email" class="w-full"
                placeholder="Escriba el correo del usuario" />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Contraseña
            </x-label>
            <x-input type="password" value="" name="password" class="w-full"
                placeholder="Escriba la contraseña del usuario" />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Cofirmar Contraseña
            </x-label>
            <x-input type="password" value="" name="password_confirmation" class="w-full"
                placeholder="Repita la contraseña del usuario" />
        </div>
        <div class="mb-4">
            <ul>
                @foreach ($roles as $role)
                    @if (!(auth()->user()->roles->contains('name', 'Administrador') && $role->name == 'Super Administrador'))
                        <li>
                            <label>
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                    {{ in_array($role->id, old('roles', $user->roles->pluck('id')->toArray())) ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 role-checkbox">
                                {{ $role->name }}
                            </label>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Estado
            </x-label>
            <!-- Input hidden para enviar valor 0 cuando el checkbox no esté marcado -->
            <input name="is_active" type="hidden" value="0">
            <label class="relative inline-flex items-center cursor-pointer">
                <!-- Checkbox para activar/desactivar usuario -->
                <input name="is_active" type="checkbox" value="1" class="sr-only peer"
                    @checked(old('is_active', $user->is_active) == 1)>
                <div
                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activar</span>
            </label>
        </div>

        <div class="flex gap-8 justify-end">
            <a class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-600 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{ route('admin.users.index') }}">Cancelar</a>
            <x-button>
                Editar usuario
            </x-button>
        </div>
    </form>

    @push('js')
        <script>
            document.querySelectorAll('.role-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.role-checkbox').forEach(otherCheckbox => {
                            if (otherCheckbox !== this) {
                                otherCheckbox.checked = false;
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
</x-admin-layout>
