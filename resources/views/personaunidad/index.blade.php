<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         Lista de PersonaUnidad
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
                            <th class="px-4 py-2">fecha</th>

                            <th class="px-4 py-2">km</th>
                            <th class="px-4 py-2">recorrido</th>
                            <th class="px-4 py-2">litros</th>

                            <th class="px-4 py-2">persona_id</th>
                            <th class="px-4 py-2">tarjeta_id</th>


                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personasunidades as $personaunidad)
                            <tr>
                                <td class="border px-4 py-2">{{ $personaunidad->fecha }}</td>

                                <td class="border px-4 py-2">{{ $personaunidad->km}}</td>
                                <td class="border px-4 py-2">{{ $personaunidad->recorrido}}</td>
                                <td class="border px-4 py-2">{{ $personaunidad->litros}}</td>
                                <td class="border px-4 py-2">{{ $personaunidad->persona_id}}</td>
                                <td class="border px-4 py-2">{{ $personaunidad->unidad_id}}</td>

                                <td class="border px-4 py-2">{{ $personaunidad->actiones }}
                                    <a href="{{ route('personaunidad.edit', $personaunidad->id) }}" class="text-blue-600 bg-blue-200 hover:text-blue-900">Editar</a>
                                    <a href="{{ route('personaunidad.destroy', $personaunidad->id) }}" class="text-red-600 hover:text-red-900">Eliminar</a>
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
