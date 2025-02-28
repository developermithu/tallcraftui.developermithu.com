<x-card data-pan="breadcrumb-card">
    <x-card-header title="Breadcrumb Components" />
    <x-card-content>
        <div class="flex flex-col gap-4">
            <x-breadcrumb>
                <x-breadcrumb-item class:icon="size-5" label="Home" :href="route('home')" icon="home" />
                <x-breadcrumb-item class:icon="size-5" label="Button" :href="route('docs.components.button')" />
                <x-breadcrumb-item class:icon="size-5" label="Input" :href="route('docs.components.input')" />
                <x-breadcrumb-item class:icon="size-5" label="icon" />
            </x-breadcrumb>

            <x-breadcrumb>
                <x-breadcrumb-item class:icon="size-5" label="Home" :href="route('home')" icon="home" />
                <x-breadcrumb-item class:icon="size-5" label="Button" :href="route('docs.components.button')" icon="slash" />
                <x-breadcrumb-item class:icon="size-5" label="Input" :href="route('docs.components.input')" icon="slash" />
                <x-breadcrumb-item class:icon="size-5" label="icon" icon="slash" />
            </x-breadcrumb>

            <x-breadcrumb>
                <x-breadcrumb-item class:icon="size-5" label="Home" :href="route('home')" icon="home" />
                <x-breadcrumb-item class:icon="size-5" label="Button" :href="route('docs.components.button')" icon="arrow-right" />
                <x-breadcrumb-item class:icon="size-5" label="Input" :href="route('docs.components.input')" icon="arrow-right" />
                <x-breadcrumb-item class:icon="size-5" label="icon" icon="arrow-right" />
            </x-breadcrumb>
        </div>
    </x-card-content>
</x-card>
