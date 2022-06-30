<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
         Lista de Tarjetas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Mostrar en una tabla la lista de  tarjeta
                    -->
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Codigo</th>

                            <th class="px-4 py-2">Tipo_combustible</th>

                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tarjetas as $tarjeta)
                            <tr>
                                <td class="px-4 py-2 border">{{ $tarjeta->codigo }}</td>

                                <td class="px-4 py-2 border">{{ $tarjeta->tipo_combustible }}</td>

                                <td class="px-4 py-2 border">{{ $tarjeta->actiones }}
                                    <a href="{{ route('tarjetas.edit', $tarjeta->id) }}"
                                        class="p-2 text-white rounded-lg bg-cyan-500 hover:text-blue-100">Editar</a>
                                   <a href="{{ route('tarjetas.show', ["tarjeta" => $tarjeta->id, "confirmar_eliminado" => 1]) }}"
                                        class="p-2 text-white bg-black rounded-lg hover:text-red-100">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
