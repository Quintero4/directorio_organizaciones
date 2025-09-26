<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar {{ $organization->name }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Editar {{ $organization->name }}</h1>
        <form method="POST" action="{{ route('organizations.update', $organization->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $organization->name) }}" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                <textarea id="description" name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{ old('description', $organization->description) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">URL:</label>
                <input type="url" id="url" name="url" value="{{ old('url', $organization->url) }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $organization->email) }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">
                Guardar cambios
            </button>
        </form>
    </div>
</body>
</html>