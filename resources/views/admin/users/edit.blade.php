<x-admin-layout>
    <p>Editar Usario</p>
    <div class="mt-2 mb-4">
        <h1 class="text-2xl font-medium text-gray-800">Agregar nuevo Usuario</h1>
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
                email
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
                <li>
                    <label>
                        <input
                        type="checkbox"
                        name="roles[]"
                        value="{{ $role->id }}"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        >
                        {{ $role->name }}
                    </label>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="flex justify-end">
            <x-button>
                Editar usuario
            </x-button>
        </div>
    </form>
</x-admin-layout>
