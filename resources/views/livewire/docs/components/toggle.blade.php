<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new 
#[Layout('components.layouts.app')] 
#[Title('Toggle components - Tallcraftui')] 
class extends Component {
    //
}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags title="Toggle components - Tallcraftui" description="Toggle components - Tallcraftui" />
    @endslot

    @slot('content')
        <x-heading title="Toggle" subtitle="Form Components" />

        <x-code-block title="Basic usage">
            @verbatim('docs')
                <x-toggle />
                <x-toggle label="Label" />
                <x-toggle label="Label *" />
            @endverbatim
        </x-code-block>
    @endslot
</div>
