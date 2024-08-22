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
                        <x-button icon="user" flat circle />
                    @endslot

                    <x-dropdown-item label="Profile" icon="user" />
                    <x-dropdown-item label="Update password" icon="key" />
                    <x-dropdown-item label="Settings" icon="cog-6-tooth" />

                    <x-separator />
                    
                    <x-dropdown-item label="Sign out" icon="arrow-right-end-on-rectangle" />
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <x-code-block title="Dropdown with link" inline>
            @verbatim('docs')
                <x-dropdown>
                    @slot('trigger')
                        <x-button icon="ellipsis-vertical" flat circle />
                    @endslot

                    <x-dropdown-item label="View" link="#" icon="eye" />
                    <x-dropdown-item label="Edit" link="#" icon="pencil-square" />
                    <x-dropdown-item label="Delete" link="#" icon="trash" />
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <x-code-block title="Persistent">
            @verbatim('docs')
                <x-dropdown persistent>
                    @slot('trigger')
                        <x-button icon="ellipsis-vertical" flat circle />
                    @endslot

                    <x-dropdown-item label="View" icon="eye" />
                    <x-dropdown-item label="Edit" icon="pencil-square" />
                    <x-dropdown-item label="Delete" icon="trash" />
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

        <x-code-block title="Without transition" new>
            @verbatim('docs')
                <x-dropdown no-transition>
                    @slot('trigger')
                        <x-button icon="ellipsis-vertical" flat circle />
                    @endslot

                    <x-dropdown-item label="View" icon="eye" />
                    <x-dropdown-item label="Edit" icon="pencil-square" />
                    <x-dropdown-item label="Delete" icon="trash" />
                </x-dropdown>
            @endverbatim
        </x-code-block>

        <h2 class="pt-5 pb-2" id="default-settings">Default settings</h2>

        <p>Change dropdown default settings according your needs <code>config/tallcraftui.php</code> </p>
            
        <x-code language="php">
            @verbatim
                return [                
                    'dropdown' => [
                        'width' => Width::W48->value,
                        'shadow' => Shadow::Shadow->value,
                        'position' => Position::TOP->value,
                        'border-radius' => BorderRadius::Rounded->value,
                    ],
                ];
            @endverbatim
        </x-code>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Dropdown with link" />
            <x-on-this-page.item title="Persistent" />
            <x-on-this-page.item title="Dropdown position" />
            <x-on-this-page.item title="Dropdown size" />
            <x-on-this-page.item title="Without transition" />
            <x-on-this-page.item title="Default settings" />
        </x-on-this-page>
    @endslot
</div>
