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
                    <form action="{{ route('unidades.store') }}" method="POST">

                        @csrf

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <x-app-input text="placa" valor="{{ old('placa') }}" required="true" id="placa" />

                            <x-app-input text="tipo_vehiculo" valor="{{ old('tipo_vehiculo') }}" required="true" id="tipo_vehiculo" />

                            <x-app-input text="tarjeta_id" valor="{{ old('tarjeta_id') }}" required="true" id="tarjeta_id" />


                        </div>

                        <div class="mt-2">
                            <x-button>
                                Guardar
                            </x-button>

                            <!-- Crear un boton para regresar a la lista de personas -->
                            <a href="{{ route('unidades.index') }}"
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
