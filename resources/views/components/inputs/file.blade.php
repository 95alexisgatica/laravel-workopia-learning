@props(['id', 'name', 'label' => null])
<div>
    @if ($label)
        <label for="{{ $id }}" class="block text-gray-700">{{ $label }}</label>
    @endif
    <input type="file" id="{{ $id }}" name="{{ $name }}"
        class="w-full px-4 py-2 border rounded focus:outline-none" />
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
