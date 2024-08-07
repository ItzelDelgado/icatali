<x-admin-layout>
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo Usuario</h1>
    </div>
    <form action="{{ route('admin.users.store') }}" method="POST" class="bg-white rounded-lg p-6 shadow-lg">
        @csrf

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input value="{{ old('name') }}" name="name" class="w-full"
                placeholder="Escriba el nombre del usuario" />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Email
            </x-label>
            <x-input value="{{ old('email') }}" name="email" class="w-full"
                placeholder="Escriba el nombre del usuario" />
        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Contraseña (La contraseña debe constar de máximo 12 caracteres.)
            </x-label>
            <x-input type="password" value="{{ old('password') }}" name="password" class="w-full"
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
                    <li>
                        <label for="">
                            <x-checkbox type="checkbox" name="roles[]" value="{{ $role->id }}" :checked="in_array($role->id, old('roles', []))" />
                            {{ $role->name }}
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="flex justify-end">
            <x-button>
                Crear usuario
            </x-button>
        </div>
    </form>
</x-admin-layout>
