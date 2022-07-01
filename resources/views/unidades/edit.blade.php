<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar datos de una tarjeta
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('unidades.update', ['unidade' => $unidade->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <x-app-input text="placa" valor="{{ $unidade->placa }}" id="placa" required="true" />
                            <x-app-input text="tipo_vehiculo" valor="{{ $unidade->tipo_vehiculo }}" id="tipo_vehiculo"
                                required="true" />
                            <x-app-input text="tarjeta_id" valor="{{ $unidade->tarjeta_id }}" id="tarjeta_id"
                                required="true" />
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
</x-app-layout>
