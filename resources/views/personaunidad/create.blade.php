<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Registrar persona
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('personaunidad.store') }}" method="POST">

                        @csrf

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <x-app-input text="fecha" valor="{{ old('fecha') }}" required="true" id="fecha" />
                            <x-app-input text="km" valor="{{ old('km') }}" required="true" id="km" />
                            <x-app-input text="recorrido" valor="{{ old('recorrido') }}" required="true" id="recorrido" />
                            <x-app-input text="litros" valor="{{ old('litros') }}" required="true" id="litros" />
                            <x-app-select text="persona_id" :datos=" $personas " required="true" id="persona_id" />

                            <x-app-select text="unidad_id" :datos="$unidades" required="true" id="unidad_id" />

                        </div>

                        <div class="mt-2">
                            <x-button>
                                Guardar
                            </x-button>

                            <!-- Crear un boton para regresar a la lista de personas -->
                            <a href="{{ route('personaunidad.index') }}"
                                class="px-4 py-2 text-xs font-semibold text-white bg-orange-500 rounded-md hover:text-white">
                                REGREASAR
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
