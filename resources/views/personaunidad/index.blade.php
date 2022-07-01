<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <span class="text-xl font-semibold leading-tight text-gray-800">
            Lista de personas
            </span>
            <a href="{{ route('personaunidad.create') }}"
            class="p-2 text-center text-white bg-black rounded-md hover:text-blue-100">
                 <!-- incluir un icono en formato svg: plus -->
                <svg class="inline w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                    Crear Nuevo
        </a>
     </div>

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
                                <tr class='bg-cyan-600'>
                                <th class="px-4 py-2">fecha</th>

                                <th class="px-4 py-2">km</th>
                                <th class="px-4 py-2">recorrido</th>
                                <th class="px-4 py-2">litros</th>

                                <th class="px-4 py-2">persona_id</th>
                                <th class="px-4 py-2">unidad_id</th>


                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personaunidades as $personaunidad)
                                <tr>
                                    <td class="border px-4 py-2">{{ $personaunidad->fecha }}</td>

                                    <td class="border px-4 py-2">{{ $personaunidad->km }}</td>
                                    <td class="border px-4 py-2">{{ $personaunidad->recorrido }}</td>
                                    <td class="border px-4 py-2">{{ $personaunidad->litros }}</td>
                                    <td class="border px-4 py-2">{{ $personaunidad->persona_id }}</td>
                                    <td class="border px-4 py-2">{{ $personaunidad->unidad_id }}</td>

                                    <td class="px-4 py-2 border">{{ $personaunidad->actiones }}
                                    <a href="{{ route('personaunidad.edit', $personaunidad->id) }}"
                                        class="p-2 text-white rounded-lg bg-cyan-500 hover:text-blue-100">@svg('gmdi-edit-calendar-s','w-6 h-6 text-black inline')</a>
                                   <a href="{{ route('personaunidad.show', ["personaunidad" => $personaunidad->id, "confirmar_eliminado" => 1]) }}"
                                        class="p-2 bg-black rounded-lg text-black-400 hover:text-red-100">@svg('gmdi-delete-forever-s','w-6 h-6 text-cyan-400 inline')</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr class="m-4">
                    {{
                        $personaunidades->links()
                     }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
