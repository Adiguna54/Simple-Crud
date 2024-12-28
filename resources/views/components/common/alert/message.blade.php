@props([
    'name' => null,
])

@error($name)
    <div class="flex items-center justify-center text-sm italic text-red-500">
        *{{ $message }}
    </div>
@enderror
