<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Detalles de la tarjetas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Crear una ventana modal para confirmar si desea eliminar -->
                    @if (isset($_GET['confirmar_eliminado']))
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">

                                <div class="ml-3">
                                    <p class="text-sm font-bold leading-5 text-red-500">
                                       Estas seguro que deseas eliminar a: {{ $personaunidad->fecha}} {{ $personaunidad->km}}  {{ $personaunidad->recorrido}}  {{ $personaunidad->litros}}
                                       {{ $personaunidad->persona_id}}  {{ $personaunidad->unidad_id}}?
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <form action="{{ route('personaunidad.destroy', $personaunidad->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="w-24 p-2 text-center text-white bg-red-800 rounded-lg hover:text-red-100">Si</button>
                                </form>
                                    <a href="{{ route('personaunidad.index') }}"
                                    class="w-24 p-2 ml-4 text-center text-white bg-gray-800 rounded-lg hover:text-red-100">No</a>
                            </div>
                        </div>
                    @endif
                        <!-- mostrar los detalles del as personas -->
                        <div class="grid grid-cols-1 gap-2 sm:grip-cols-2">
                            <x-app-show text="fecha" valor="{{ $personaunidad->fecha }}" />
                                <x-app-show text="km" valor="{{ $personaunidad->km}}" />
                                    <x-app-show text="recorrido" valor="{{ $personaunidad->recorrido }}" />
                                        <x-app-show text="litros" valor="{{ $personaunidad->litros }}" />
                                            <x-app-show text="personas_id" valor="{{ $personaunidad->persona_id}}" />
                                                <x-app-show text="unidad_id" valor="{{ $personaunidad->unidad_id }}" />

                            </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
