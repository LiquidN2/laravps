@props(['error-name' => null])

@error($errorName)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500" {{ $attributes }}>
        {{ $message }}
    </p>
@enderror
