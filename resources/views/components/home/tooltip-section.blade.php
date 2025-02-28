<x-card data-pan="tooltip-card">
    <x-card-header title="Tooltips" />
    <x-card-content>
        <div class="flex gap-4">
            <x-tooltip text="Top" top />
            <x-tooltip text="Bottom" bottom />
            <x-tooltip text="Left" left />
            <x-tooltip text="Right" right />
        </div>

        <div class="flex gap-4">
            <x-tooltip text="Custom icon" icon="information-circle" />
            <x-tooltip text="Gradient color" icon="information-circle" gradient />
            <x-tooltip text="Without arrow" icon="information-circle" no-arrow />
            <x-tooltip text="Without transition" icon="information-circle" no-transition />
        </div>
    </x-card-content>
</x-card>
