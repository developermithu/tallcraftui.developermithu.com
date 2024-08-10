<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new 
#[Layout('components.layouts.app')] 
#[Title('Radio components - Tallcraftui')] 
class extends Component {
    //
}; ?>

<div>
    @slot('content')
        <x-heading title="Radio" subtitle="Form Components" />

        <x-code-block title="Basic usage">
            @verbatim('docs')
                <x-radio />
                <x-radio label="Label *" />
                <x-radio label="Label *" hint="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quia." />
            @endverbatim
        </x-code-block>

        <x-code-block title="Alignment">
            @verbatim('docs')
                <x-radio label="Text right" />
                <x-radio label="Text left" text-left />
                <x-radio label="Text left" hint="Lorem ipsum dolor adipisicing elit. Ullam, quia." text-left />
            @endverbatim
        </x-code-block>

        <x-code-block title="Color variants" inline>
            @verbatim('docs')
                <x-radio label="Primary" checked />
                <x-radio label="Secondary" checked secondary />
                <x-radio label="Black" checked black />
                <x-radio label="White" checked white />
                <x-radio label="Slate" checked slate />
                <x-radio label="Zinc" checked zinc />
                <x-radio label="Gray" checked gray />
                <x-radio label="Neutral" checked neutral />
                <x-radio label="Stone" checked stone />
                <x-radio label="Red" checked red />
                <x-radio label="Orange" checked orange />
                <x-radio label="Amber" checked amber />
                <x-radio label="Yellow" checked yellow />
                <x-radio label="Lime" checked lime />
                <x-radio label="Green" checked green />
                <x-radio label="Emerald" checked emerald />
                <x-radio label="Teal" checked teal />
                <x-radio label="Cyan" checked cyan />
                <x-radio label="Sky" checked sky />
                <x-radio label="Blue" checked blue />
                <x-radio label="Indigo" checked Indigo />
                <x-radio label="Violet" checked violet />
                <x-radio label="Purple" checked purple />
                <x-radio label="Fuchsia" checked fuchsia />
                <x-radio label="Pink" checked pink />
                <x-radio label="Rose" checked rose />
            @endverbatim
        </x-code-block>

        <x-code-block title="Size variants" inline>
            @verbatim('docs')
                <x-radio checked sm />
                <x-radio checked md />
                <x-radio checked lg />
                <x-radio checked xl />
                <x-radio checked 2xl />
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Alignment" />
            <x-on-this-page.item title="Color variants" />
            <x-on-this-page.item title="Size variants" />
        </x-on-this-page>
    @endslot
</div>
