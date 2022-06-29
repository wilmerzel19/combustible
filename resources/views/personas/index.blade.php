<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Lista de personas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- Mostrar en una tabla la lista de  personas
                 -->
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nombre</th>

                                <th class="px-4 py-2">Cedula</th>

                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                                <tr>
                                    <td class="border px-4 py-2">{{ $persona->nombre }}</td>

                                    <td class="border px-4 py-2">{{ $persona->cedula }}</td>

                                    <td class="border px-4 py-2">{{ $persona->actiones }}
                                        <a href="{{ route('personas.edit', $persona->id) }}" class="text-blue-600 bg-blue-200 rounded-lg hover:text-blue-900">Editar</a>
                                        <a href="{{ route('personas.destroy', $persona->id) }}" class="text-red-600 hover:text-red-900 rounded-lg ">Eliminar</a>
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
