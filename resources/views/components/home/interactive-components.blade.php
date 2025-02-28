<x-card class="col-span-full lg:col-span-5">
    <x-card-header title="Components" />
    <x-card-content>
        <div class="flex flex-wrap items-center justify-between gap-2">
            <x-button data-pan="button" label="Button" sm />
            <x-dropdown title="Account settings">
                @slot('trigger')
                    <x-button data-pan="dropdown-button" label="Dropdown" outline sm />
                @endslot

                <x-dropdown-item label="Profile" icon="user" />
                <x-dropdown-item label="Update password" icon="key" />
                <x-dropdown-item label="Settings" icon="cog-6-tooth" />

                <x-separator />

                <x-dropdown-item label="Sign out" icon="arrow-right-end-on-rectangle" />
            </x-dropdown>

            <x-button data-pan="drawer-button" x-on:click="$wire.openDrawer = true" label="Drawer" sm />
        </div>

        <div class="flex flex-wrap items-center justify-between gap-2">
            <x-button data-pan="toast-button" wire:click="showToast()" label="Toast" sm />

            <x-button data-pan="modal-button" @click="$wire.openModal = true" label="Open Modal" outline sm />

            <x-tooltip text="Default tooltip" no-transition>
                <x-button data-pan="tooltip-button" label="Tooltip" sm />
            </x-tooltip>
        </div>

        <x-tab data-pan="tab" wire:model="activeTab" as="switch">
            <x-slot name="items">
                <x-tab-item id="tab1" label="Tab 1" as="switch" />
                <x-tab-item id="tab2" label="Tab 2" as="switch" />
            </x-slot>

            <x-tab-content id="tab1"> Tab 1 </x-tab-content>
            <x-tab-content id="tab2"> Tab 2 </x-tab-content>
        </x-tab>
    </x-card-content>
</x-card>
