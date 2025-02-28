<x-card data-pan="progress-card">
    <x-card-header title="Progress Components" />
    <x-card-content>
        <div class="space-y-2">
            <x-progress value="50" without-value lg />
            <x-progress value="50" lg />
            <x-progress value="50" divided-format lg />
            <x-progress value="50" label="Percentage" lg />
        </div>
    </x-card-content>
</x-card>

<x-card data-pan="progress-radial-card">
    <x-card-header title="Progress Radial" />
    <x-card-content>
        <div class="flex flex-wrap gap-4 pb-5 itmes-center">
            <x-progress-radial value="50" without-value sm />
            <x-progress-radial value="50" sm />
            <x-progress-radial value="50" divided-format sm />
            <x-progress-radial value="50" label="Percentage" sm />
        </div>
    </x-card-content>
</x-card>
