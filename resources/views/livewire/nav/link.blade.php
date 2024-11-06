<a @class([
    'rounded-md px-3 py-2',
    'block text-base' => $isMobile,
    'text-sm' => !$isMobile,
    'bg-gray-900 text-white' => $active,
    'text-gray-300 hover:bg-gray-700 hover:text-white' => !$active,
])
    href="{{ $href }}"
    @if($active) aria-current="page" @endif
    wire:navigate
>
    {{ $name }}
</a>
