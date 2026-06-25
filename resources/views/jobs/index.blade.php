<x-layout>
    <h1 class="text-2xl font-bold">All Jobs</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 mb-6">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No hay trabajos disponible</p>
        @endforelse
    </div>
</x-layout>
