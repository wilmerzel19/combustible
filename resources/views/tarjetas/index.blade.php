<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <span class="text-xl font-semibold leading-tight text-gray-800">
            Lista de personas
            </span>
            <a href="{{ route('tarjetas.create') }}"
            class="p-2 text-center text-white bg-black rounded-md hover:text-blue-100">
                 <!-- incluir un icono en formato svg: plus -->
                <svg class="inline w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                    Crear Nuevo
        </a>
     </div>

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
                                        class="p-2 text-white rounded-lg bg-cyan-500 hover:text-blue-100">@svg('gmdi-edit-calendar-s','w-6 h-6 text-black inline')</a>
                                   <a href="{{ route('tarjetas.show', ["tarjeta" => $tarjeta->id, "confirmar_eliminado" => 1]) }}"
                                        class="p-2 bg-black rounded-lg text-black-400 hover:text-red-100">@svg('gmdi-delete-forever-s','w-6 h-6 text-cyan-400 inline')</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <hr class="m-4">
                {{
                    $tarjetas->links()
                 }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
