<x-card data-pan="alert-card">
    <x-card-header title="Alert Components" />
    <x-card-content>
        <div class="space-y-2">
            <x-alert title="Default" />
            <x-alert title="Danger" dismissible red />
            <x-alert title="Warning" dismissible amber />
            <x-alert title="Info" dismissible blue />
            <x-alert title="Success" dismissible success />
            <x-alert icon="rocket-launch" title="Alert with description"
                description="Lorem, ipsum dolor sit amet consectetur adipisicing." purple dismissible />
        </div>
    </x-card-content>
</x-card>
