<x-card data-pan="markdown-card">
    <x-card-header title="Markdown Component" />
    <x-card-content>
        @php
            $config = [
                'maxHeight' => '180px',
            ];
        @endphp

        <x-markdown wire:model="content" :config="$config" />
    </x-card-content>
</x-card>
