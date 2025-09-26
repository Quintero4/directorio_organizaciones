<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $organization->name }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $organization->name }}</h1>
        <p class="text-gray-600 mb-2"><strong>Descripción:</strong> {{ $organization->description }}</p>
        <p class="text-gray-600 mb-2"><strong>URL:</strong> <a href="{{ $organization->url }}" class="text-blue-500 hover:underline">{{ $organization->url }}</a></p>
        <p class="text-gray-600 mb-6"><strong>Email:</strong> {{ $organization->email }}</p>
        <a href="{{ route('organizations.index') }}" class="text-blue-500 hover:underline transition-colors duration-200">Volver a la lista</a>
    </div>
</body>
</html>