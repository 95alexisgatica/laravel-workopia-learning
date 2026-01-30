<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobs</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    {{-- @if (!empty($jobs))
        <ul>
            @foreach ($jobs as $job)
                <li>
                    {{ $job }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay trabajos disponibles</p>
    @endif --}}

    {{-- FORELSE --}}
    {{-- LOOP - distintas directivas para el loop --}}
    <ul>
        @forelse ($jobs as $job)
            <li>{{ $loop->index }} - {{ $job }}</li>
        @empty
            <p>No hay trabajos disponible</p>
        @endforelse
    </ul>
</body>

</html>
