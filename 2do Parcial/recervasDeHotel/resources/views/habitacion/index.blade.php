@section('content')
        <div class="text-2xl font-bold mb-6">Clientes</div>

        <!-- Formulario de búsqueda -->
        <form action="{{ route('clientes.index') }}" method="GET" class="mb-6">
            <div class="flex items-center space-x-2">
                <input type="text" name="search" placeholder="Buscar por CI" value="{{ request('search') }}" class="border border-gray-300 rounded-lg p-2">
                <button type="submit" class="bg-[#4CAF50] text-white px-4 py-2 rounded-lg hover:bg-green-600">Buscar</button>
            </div>
        </form>

        <!-- Contenedor de la tabla sin fondo ni borde externo -->
        <div class="overflow-x-auto w-full">
            <table class="min-w-full border-collapse bg-white rounded-2xl overflow-hidden">
                <thead>
                    <tr class="bg-[#2e4057] text-white">
                        <th class="py-3 px-4 text-center">CI</th>
                        <th class="py-3 px-4 text-center">Nombre</th>
                        <th class="py-3 px-4 text-center">Celular</th>
                        <th class="py-3 px-4 text-center">Membresía</th>
                        <th class="py-3 px-4 text-center">Estado</th>
                        <th class="py-3 px-4 text-center">Fecha de Inicio</th>
                        <th class="py-3 px-4 text-center">Fecha de Finalización</th>
                        <th class="py-3 px-4 text-center">Días Restantes</th>
                        <th class="py-3 px-4 text-center">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr class="border-b">
                            <td class="py-3 px-4 text-center">{{ $member->ci }}</td>
                            <td class="py-3 px-4 text-center">{{ $member->nombre }}</td>
                            <td class="py-3 px-4 text-center">{{ $member->celular }}</td>
                            <td class="py-3 px-4 text-center">{{ $member->membresiaM->nombre }}</td>
                            <td class="py-3 px-4 text-center">{{ $member->estado }}</td>
                            <td class="py-3 px-4 text-center">{{ \Carbon\Carbon::parse($member->fecha_inicio)->toDateString() }}</td>
                            <td class="py-3 px-4 text-center">{{ \Carbon\Carbon::parse($member->fecha_inicio)->addDays($member->membresiaM->dias)->toDateString() }}</td>
                            <td class="py-3 px-4 text-center">{{ max(0, (int) \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($member->fecha_inicio)->addDays($member->membresiaM->dias), false)) }}</td>
                            <td class="py-3 px-4 text-center">
                                @if ($member->estado === 'Activo')
                                    <a href="./clientes/{{$member->id}}/edit" class="bg-[#CCE6F5] text-black px-4 py-1 rounded-lg hover:bg-[#B4D9EE]">Editar</a>
                                @else
                                    <a href="./clientes/{{$member->id}}/activar" class="bg-[#4CAF50] text-white px-4 py-1 rounded-lg hover:bg-green-600">Activar</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection