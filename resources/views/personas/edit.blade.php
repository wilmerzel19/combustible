<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar datos de una persona
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('personas.update', $persona->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 gap-6">
                            <x-app-input text="Nombre" valor="{{ $persona->nombre }}" id="nombre" required="true" />
                            <x-app-input text="Cedula" valor="{{ $persona->cedula }}" id="cedula"
                                required="true" />
                        </div>
                        <div class="mt-2">
                            <x-button>
                                Guardar
                            </x-button>

                            <!-- Crear un boton para regresar a la lista de personas -->
                            <a href="{{ route('personas.index') }}"
                                class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-orange-500 hover:text-white">
                                REGREASAR
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</x-app-layout>
