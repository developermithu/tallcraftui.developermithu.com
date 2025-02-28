<x-card data-pan="clipboard-card">
    <x-card-header title="Clipboards" />
    <x-card-content>
        <div class="flex gap-5">
            <x-clipboard content="tallcraftui" />
            <x-clipboard content="tallcraftui" icon="document" copied-icon="document-check" copied-text="Custom icon" />
            <x-clipboard content="tallcraftui" icon="clipboard-document-list"
                x-on:copy="alert(`✅ Copied: ${$event.detail.text}`)" />
        </div>
    </x-card-content>
</x-card>
