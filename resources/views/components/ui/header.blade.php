<header class="bg-white shadow">
    <div class="flex flex-row justify-between mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading ?? "Main Page Heading" }}</h1>
        {{ $slot }}
    </div>
</header>
