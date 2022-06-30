<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Detalles de la persona
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
                                        Estas seguro que deseas eliminar a: {{ $persona->nombre }}
                                        {{ $persona->cedula }}?
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-24 p-2 text-center text-white bg-red-800 rounded-lg hover:text-red-100">Si</button>
                                </form>
                                <a href="{{ route('personas.index') }}"
                                    class="w-24 p-2 ml-4 text-center text-white bg-gray-800 rounded-lg hover:text-red-100">No</a>
                            </div>
                        </div>
                    @endif
                    <!-- mostrar los detalles del as personas -->
                    <div class="grid grid-cols-1 gap-2 sm:grip-cols-2">
                        <x-app-show text="Nombre" valor="{{ $persona->nombre }}" />
                        <x-app-show text="Cedula" valor="{{ $persona->cedula }}" />

                    </div>
                    <!-- mostrar el detalle de los recorridos de las personas -->
                    <div>
                        <h3 class="text-lg font-semibold leading-tight text-center text-cyan-500">
                            Recorridos
                        </h3>
                        <div class="mt-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-900 uppercase border-gray-200 bordier-b bg-cyan-500">
                                                Fecha
                                            </th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-900 uppercase border-b border-gray-200 bg-cyan-500">
                                                Km
                                            </th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-900 uppercase border-b bg-cyan-500 border-cyan-500">
                                                recorrido
                                            </th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-900 uppercase border-b border-gray-200 bg-cyan-500">
                                                Litros
                                            </th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-900 uppercase border-b border-gray-200 bg-cyan-500">
                                                Persona id
                                            </th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-900 uppercase border-b border-gray-200 bg-cyan-500">
                                                Unidad id
                                            </th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-900 uppercase border-b border-gray-200 bg-cyan-500">
                                                Acciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($persona->recorridos as $recorrido)
                                            <tr>
                                                <td
                                                    class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                    {{ $recorrido->fecha }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                    {{ $recorrido->km }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                    {{ $recorrido->recorrido }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                    {{ $recorrido->litros }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                    {{ $recorrido->persona_id }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                    {{ $recorrido->unidad_id }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        @svg('gmdi-edit-calendar', 'h-5 w-6 text-gray-400 inline')


                                                    </a>


                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        @svg('gmdi-delete-sweep-r', 'h-5 w-5 text-gray-400 inline')


                                                    </a>

                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                        @svg('gmdi-zoom-in-r', 'h-5 w-5 text-gray-400 inline')


                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>



                            </div>



                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
