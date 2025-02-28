<div class="space-y-4 col-span-full xl:col-span-5 2xl:col-span-4">
    <x-card data-pan="menu-card">
        <x-card-header title="Menu" />
        <x-card-content>
            <x-menu title="Menu Component">
                <x-menu-item label="Edit" icon="pencil-square" />
                <x-menu-item label="Duplicate" icon="document-duplicate" />

                <x-separator />
                <x-menu-item label="Archive" icon="archive-box" badge="25" badge-end />
                <x-menu-item label="Move" icon="arrow-right-circle" />

                <x-separator title="Actions" />
                <x-menu-item label="Share" icon="user-plus" badge="New" />
                <x-menu-item label="Add to Favorites" icon="heart" />

                <x-separator />
                <x-menu-item label="Delete" icon="trash" />
            </x-menu>
        </x-card-content>
    </x-card>

    {{-- Separator --}}
    <x-card data-pan="separator-card">
        <x-card-header title="Separator" />
        <x-card-content>
            <ul class="flex flex-col">
                <li>PHP</li>
                <x-separator />
                <li>Laravel</li>
                <x-separator />
                <li>Livewire</li>
            </ul>
        </x-card-content>
    </x-card>
</div>