<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Dropdown components - Tallcraftui')] class extends Component {
    //
}; ?>

<div>
    @slot('content')
        <x-heading title="Dropdown" subtitle="UI Components" />

        <x-code-block title="Basic usage" inline>
            @verbatim('docs')
                <x-dropdown>
                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>

                <x-dropdown>
                    @slot('trigger')
                        <x-button label="Dropdown Menu" />
                    @endslot

                    <x-dropdown-item label="Profile" />
                    <x-dropdown-item label="Logout" />
                    <x-dropdown-item label="Settings" />
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <x-code-block title="Menu with icon" inline>
            @verbatim('docs')
                <x-dropdown>
                    @slot('trigger')
                        <x-button label="Menu with Icon" />
                    @endslot

                    <x-dropdown-item icon="user" label="Profile" />
                    <x-dropdown-item icon="arrow-right-end-on-rectangle" label="Logout" />
                    <x-dropdown-item icon="cog-6-tooth" label="Settings" />
                </x-dropdown>

                <x-dropdown>
                    @slot('trigger')
                        <x-button label="Menu with Link" />
                    @endslot

                    <x-dropdown-item :href="route('docs.components.input')" icon="user" label="Profile" />
                    <x-dropdown-item :href="route('docs.components.button')" icon="arrow-right-end-on-rectangle" label="Profile" />
                    <x-dropdown-item :href="route('docs.components.icon')" icon="cog-6-tooth" label="Settings" />
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <x-code-block title="Persistent">
            @verbatim('docs')
                <x-dropdown persistent>
                    @slot('trigger')
                        <x-button label="Persistent" />
                    @endslot

                    <x-dropdown-item icon="user" label="Profile" />
                    <x-dropdown-item icon="arrow-right-end-on-rectangle" label="Profile" />
                    <x-dropdown-item icon="cog-6-tooth" label="Settings" />
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <x-code-block title="Icon dropdown" inline>
            @verbatim('docs')
                <x-dropdown>
                    @slot('trigger')
                        <x-button icon="bars-3" flat purple />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>

                <x-dropdown>
                    @slot('trigger')
                        <x-button icon="bars-3-center-left" flat purple />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
                
                <x-dropdown>
                    @slot('trigger')
                        <x-button icon="ellipsis-vertical" flat purple />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
                
                <x-dropdown>
                    @slot('trigger')
                        <x-button icon="ellipsis-horizontal" flat purple />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Menu with icon" />
            <x-on-this-page.item title="Persistent" />
            <x-on-this-page.item title="Icon dropdown" />
        </x-on-this-page>
    @endslot
</div>
