<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new 
#[Layout('components.layouts.app')] 
#[Title('Icon components - Tallcraftui')] 
class extends Component {
    //
}; ?>

<div>
    @slot('content')
        <x-heading title="Icon" subtitle="UI Components">
            @slot('description')
                All icons are powered by <a href="https://github.com/blade-ui-kit/blade-heroicons" target="_blank">Blade Hero Icons</a>, which you can use immediately. Simply use the name of any <a href="https://heroicons.com" target="_blank">Heroicon</a>.
            @endslot
        </x-heading>

        <x-code-block title="Basic usage" inline>
            @verbatim('docs')
                <x-icon name="home" />
                <x-icon name="trash" />
                <x-icon name="archive-box-x-mark" />
                <x-icon name="pencil-square" />
                <x-icon name="cog-6-tooth" />
                <x-icon name="bars-3" />
                <x-icon name="bell-alert" />
                <x-icon name="clipboard-document" />
                <x-icon name="arrow-left" />
                <x-icon name="arrow-right" />
                <x-icon name="chat-bubble-left" />
                <x-icon name="magnifying-glass" />
            @endverbatim
        </x-code-block>

        <x-code-block title="Size variants" inline>
            @verbatim('docs')
                <x-icon name="bell" class="!size-3" />
                <x-icon name="bell" class="!size-4" />
                <x-icon name="bell" class="!size-5" />
                <x-icon name="bell" class="!size-6" />
                <x-icon name="bell" class="!size-7" />
                <x-icon name="bell" class="!size-8" />
                <x-icon name="bell" class="!size-9" />
                <x-icon name="bell" class="!size-10" />
            @endverbatim
        </x-code-block>

        <x-code-block title="Customize icon" inline>
            @verbatim('docs')
                <x-icon name="home" class="text-indigo-500" />
                <x-icon name="pencil-square" class="text-amber-500 !size-5" />
                <x-icon name="trash" class="text-red-500 !size-6" />
                <x-icon name="clipboard-document" class="text-green-500 !size-7" />
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Size variants" />
            <x-on-this-page.item title="Customize icon" />
        </x-on-this-page>
    @endslot
</div>
