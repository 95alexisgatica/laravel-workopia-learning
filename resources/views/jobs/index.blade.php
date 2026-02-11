<x-layout>
    <h1>Available Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
            <li>{{ $loop->index }} - {{ $job }}</li>
        @empty
            <p>No hay trabajos disponible</p>
        @endforelse
    </ul>
</x-layout>
