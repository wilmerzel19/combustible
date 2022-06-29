<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         Lista de Unidades
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Mostrar en una tabla la lista de  unidades
                    -->
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Placa</th>

                            <th class="px-4 py-2">Tipo_vehiculo</th>
                            <th class="px-4 py-2">Tarjeta_id</th>

                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unidades as $unidad)
                            <tr>
                                <td class="border px-4 py-2">{{ $unidad->placa }}</td>

                                <td class="border px-4 py-2">{{ $unidad->tipo_vehiculo}}</td>
                                <td class="border px-4 py-2">{{ $unidad->tarjeta_id}}</td>

                                <td class="border px-4 py-2">{{ $unidad->actiones }}
                                    <a href="{{ route('unidades.edit', $unidad->id) }}" class="text-blue-600 bg-blue-200 hover:text-blue-900">Editar</a>
                                    <a href="{{ route('unidades.destroy', $unidad->id) }}" class="text-red-600 hover:text-red-900">Eliminar</a>
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
