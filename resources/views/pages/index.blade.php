<x-layout>
    <h1 class="text-3xl font-bold mb-4 border border-gray-300 p-3">Welcome to Woropia</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 mb-6">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No hay trabajos disponible</p>
        @endforelse
    </div>
    <a href="{{ route('jobs.index') }}" class="block text-xl text-center">
        <i class="fa fa-arrow-alt-circle-right"></i> View All Jobs
    </a>
    <x-bottom-banner />
</x-layout>
