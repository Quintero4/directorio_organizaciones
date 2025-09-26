<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de Organizaciones</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Directorio de Organizaciones</h1>
            <a href="{{ route('organizations.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">
                Crear Organización
            </a>
        </div>

        @if ($organizations->isEmpty())
            <p class="text-gray-500 text-center">No hay organizaciones registradas.</p>
        @else
            <ul class="space-y-4">
                @foreach ($organizations as $organization)
                    <li class="flex justify-between items-center border-b pb-2">
                        <a href="{{ route('organizations.show', $organization->id) }}" class="text-lg font-medium text-blue-600 hover:underline">
                            {{ $organization->name }}
                        </a>
                        <div class="space-x-2">
                            <a href="{{ route('organizations.edit', $organization->id) }}" class="text-sm text-green-500 hover:underline">Editar</a>
                            <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-500 hover:underline" onclick="return confirm('¿Estás seguro de que quieres eliminar esta organización?');">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>