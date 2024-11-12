<form wire:submit="submit">
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Customer Information</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Complete the form below to create a new customer.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <x-ui.label for="name">Name</x-ui.label>
                    <x-ui.input type="text" id="name" wire:model="name" />
                    <x-ui.input-error error-name="name"/>
                </div>

                <div class="sm:col-span-3">
                    <x-ui.label for="code">Code</x-ui.label>
                    <x-ui.input type="number" id="code" wire:model="code" />
                    <x-ui.input-error error-name="code"/>
                </div>

                <div class="sm:col-span-3">
                    <x-ui.label for="email">Email</x-ui.label>
                    <x-ui.input type="email" id="email" wire:model="email" />
                    <x-ui.input-error error-name="email"/>
                </div>

                <div class="sm:col-span-3">
                    <x-ui.label for="phone">Phone</x-ui.label>
                    <x-ui.input type="text" id="phone" wire:model="phone" />
                    <x-ui.input-error error-name="phone"/>
                </div>

                <div class="sm:col-span-3">
                    <label for="country" class="block text-sm/6 font-medium text-gray-900">Country</label>
                    <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Street address</label>
                    <div class="mt-2">
                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div class="sm:col-span-2 sm:col-start-1">
                    <label for="city" class="block text-sm/6 font-medium text-gray-900">City</label>
                    <div class="mt-2">
                        <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="region" class="block text-sm/6 font-medium text-gray-900">State / Province</label>
                    <div class="mt-2">
                        <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm/6 font-medium text-gray-900">ZIP / Postal code</label>
                    <div class="mt-2">
                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
</form>
