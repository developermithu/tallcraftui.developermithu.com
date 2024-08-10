<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new 
#[Layout('components.layouts.app')] 
#[Title('Textarea components - Tallcraftui')] 
class extends Component {
    //
}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags title="Textarea components - Tallcraftui" description="Textarea components - Tallcraftui" />
    @endslot

    @slot('content')
        <x-heading title="Textarea" subtitle="Form Components" />

        <x-code-block title="Basic usage">
            @verbatim('docs')
                <x-textarea label="Bio *" placeholder="Your bio" />
                <x-textarea label="Bio" placeholder="Your bio" hint="Write your full bio in short" />
            @endverbatim
        </x-code-block>

        <x-code-block title="Auto resize" new>
            @verbatim('docs')
                <x-textarea label="Bio *" auto-resize />
            @endverbatim
        </x-code-block>

        <x-code-block title="Customize size">
            @verbatim('docs')
                <x-textarea label="Your bio" rows="1" />
                <x-textarea label="Your bio" rows="2" />
                <x-textarea label="Your bio" rows="5" />
                <x-textarea label="Your bio" rows="8" />
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Auto resize" />
            <x-on-this-page.item title="Customize size" />
        </x-on-this-page>
    @endslot
</div>
