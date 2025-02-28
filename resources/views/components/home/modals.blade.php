{{-- Drawer --}}
<x-drawer wire:model="openDrawer" title="Drawer Title">
    Drawer content goes here ...
</x-drawer>

{{-- Modal --}}
<x-modal wire:model="openModal" center md>
    <div class="p-6 text-center whitespace-normal">
        <x-icon name="exclamation-circle" class="mx-auto mb-4 text-gray-400 !size-12 dark:text-gray-200" />
        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" style="text-transform: none">
            {{ __('Are you sure you want to delete this?') }}
        </h3>
        <div class="flex items-center justify-center gap-3">
            <x-button label="Close" x-on:click="$dispatch('close')" red flat />
            <x-button label="Yes, delete" flat />
        </div>
    </div>
</x-modal>
