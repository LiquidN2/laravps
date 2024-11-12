<x-layouts.app>
    <x-slot:title>Customers</x-slot>
    <x-slot:heading>Customers</x-slot>
    <x-slot:links>
        <x-ui.button href="/customers/create" :is-link="true">New Customer</x-ui.button>
    </x-slot>

    <livewire:customers.customer-list />
</x-layouts.app>
