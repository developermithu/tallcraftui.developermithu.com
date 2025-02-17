<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title, Validate};

new 
#[Layout('components.layouts.app')] 
#[Title('Progress Radial Components - Tallcraftui')] 
class extends Component {

}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags 
            title="Progress Radial Component for Laravel & Tailwind CSS - TallCraftUI" 
            description="Radial Progress Component - Customizable Circular Progress Indicators with Tailwind CSS."
        />
    @endslot

    <x-heading title="Progress Radial" subtitle="UI Components" />

    <x-code-block title="Basic usage">
        @verbatim('docs')
            <x-progress-radial value="50" label="Default" />
        @endverbatim
    </x-code-block>

    <x-code-block title="Divided format">
        @verbatim('docs')
            <x-progress-radial value="50" divided-format />
        @endverbatim
    </x-code-block>

    <x-code-block title="Without value">
        @verbatim('docs')
            <x-progress-radial value="50" without-value />
        @endverbatim
    </x-code-block>

    <x-code-block title="Size variants" inline>
        @verbatim('docs')
                <x-progress-radial value="50" xs />
                <x-progress-radial value="50" sm />
                <x-progress-radial value="50" md /> {{-- default --}}
                <x-progress-radial value="50" lg />
                <x-progress-radial value="50" xl />
                <x-progress-radial value="50" 2xl />
        @endverbatim
    </x-code-block>

    <x-code-block title="Color variants" inline>
        @verbatim('docs')
                <x-progress-radial value="50" />
                <x-progress-radial value="50" black />
                <x-progress-radial value="50" slate />
                <x-progress-radial value="50" zinc />
                <x-progress-radial value="50" gray />
                <x-progress-radial value="50" neutral />
                <x-progress-radial value="50" stone />
                <x-progress-radial value="50" red />
                <x-progress-radial value="50" orange />
                <x-progress-radial value="50" amber />
                <x-progress-radial value="50" yellow />
                <x-progress-radial value="50" lime />
                <x-progress-radial value="50" green />
                <x-progress-radial value="50" emerald />
                <x-progress-radial value="50" teal />
                <x-progress-radial value="50" cyan />
                <x-progress-radial value="50" sky />
                <x-progress-radial value="50" blue />
                <x-progress-radial value="50" indigo />
                <x-progress-radial value="50" violet />
                <x-progress-radial value="50" purple />
                <x-progress-radial value="50" fuchsia />
                <x-progress-radial value="50" pink />                
                <x-progress-radial value="50" rose />
        @endverbatim
    </x-code-block>

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Divided format" />
            <x-on-this-page.item title="Without value" />
            <x-on-this-page.item title="Size variants" />
            <x-on-this-page.item title="Color variants" />
        </x-on-this-page>
    @endslot
</div>
