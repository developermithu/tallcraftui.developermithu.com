<section data-pan="breeze-vs-jetstream-vs-tallcraftui" class="max-w-4xl pb-20 m-auto">
    <h2 class="pb-3 text-2xl font-semibold text-center xxs:text-3xl sm:text-4xl">
        Breeze vs Jetstream vs TallCraftUI
    </h2>

    <x-code-block title="Breeze" no-render no-copy>
        @verbatim
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        @endverbatim
    </x-code-block>

    <x-code-block title="Jetstream" no-render no-copy>
        @verbatim
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required />
        @endverbatim
    </x-code-block>

    <x-code-block title="TallCraftUI" no-render no-copy>
        @verbatim
            <x-input label="Name *" wire:model="name" />
        @endverbatim
    </x-code-block>
</section>
