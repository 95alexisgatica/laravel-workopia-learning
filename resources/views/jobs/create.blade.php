<x-layout>
    <x-slot name=title> Create Job </x-slot>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="title">
            @error('title')
                <div class="text-red-500 mt-2 trxt-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="text" name="description" placeholder="description">
            @error('description')
                <div class="text-red-500 mt-2 trxt-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
</x-layout>
