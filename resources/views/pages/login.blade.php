<x-layout>
    <x-slot name="title">Login</x-slot>
    <div class="flex justify-center items-center mt-8">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-3xl font-bold text-center mb-6">Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="your@email.com"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-900 @error('email') border-red-500 @enderror"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" placeholder="********"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-900 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="rounded">
                        <span class="ml-2 text-gray-700 text-sm">Remember me</span>
                    </label>
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="w-full bg-yellow-500 text-black px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none font-semibold">
                        Login
                    </button>
                </div>
            </form>

            <p class="text-center text-gray-500 text-sm">
                Don't have an account?
                <a href="/register" class="text-blue-900 hover:underline">Register</a>
            </p>
        </div>
    </div>
</x-layout>
