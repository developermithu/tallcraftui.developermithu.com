<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Dropdown components - Tallcraftui')] class extends Component {
    //
}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags title="Dropdown components - Tallcraftui" description="Dropdown components - Tallcraftui" />
    @endslot

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

                    <x-dropdown-item icon="user" label="Profile" />
                    <x-dropdown-item icon="arrow-right-end-on-rectangle" label="Logout" />
                    <x-dropdown-item icon="cog-6-tooth" label="Settings" />
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <x-code-block title="Menu with link" inline>
            @verbatim('docs')
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

        <x-code-block title="Dropdown position" inline>
            @verbatim('docs')
                <x-dropdown top>
                    @slot('trigger')
                        <x-button label="Top" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>

                <x-dropdown bottom>
                    @slot('trigger')
                        <x-button label="Bottom" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
                
                <x-dropdown left>
                    @slot('trigger')
                        <x-button label="Left" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
                
                <x-dropdown right>
                    @slot('trigger')
                        <x-button label="Right" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
            @endverbatim
        </x-code-block>
        
        <x-code-block title="Dropdown size" inline>
            @verbatim('docs')
                <x-dropdown w-36>
                    @slot('trigger')
                        <x-button label="w-36" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>

                <x-dropdown w-48>
                    @slot('trigger')
                        <x-button label="w-48" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
                
                <x-dropdown w-64>
                    @slot('trigger')
                        <x-button label="w-64" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
                
                <x-dropdown w-80>
                    @slot('trigger')
                        <x-button label="w-80" />
                    @endslot

                    <div class="p-5">
                        Modal content.
                    </div>
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <h2 class="pt-5 pb-2" id="default-settings">Default settings</h2>

        <p>Change dropdown default settings according your needs <code>config/tallcraftui.php</code> </p>
            
        <x-code language="php">
            @verbatim
                return [                
                    /**
                    * 
                    * border-radius => Allowed: rounded, rounded-sm, rounded-md, rounded-lg, rounded-xl, rounded-2xl, rounded-3xl, rounded-full, rounded-none
                    * position => Allowed: top, bottom, left, right
                    * size => Allowed: w-20, w-24, w-28, w-32, w-36, w-40, w-44, w-48, w-52, w-56, w-60, w-64, w-72, w-80, w-96, w-full
                    *
                    */
                    'dropdown' => [
                        'border-radius' => 'rounded',
                        'position' => 'top',
                        'size' => 'w-48',
                    ],
                ];
            @endverbatim
        </x-code>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Menu with link" />
            <x-on-this-page.item title="Persistent" />
            <x-on-this-page.item title="Dropdown position" />
            <x-on-this-page.item title="Dropdown size" />
            <x-on-this-page.item title="Default settings" />
        </x-on-this-page>
    @endslot
</div>
