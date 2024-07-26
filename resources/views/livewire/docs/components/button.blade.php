<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Button components - Tallcraftui')] class extends Component {
    //
}; ?>

<div>
    @slot('content')
        <x-heading title="Button" subtitle="UI Components" />

        <x-code-block title="Basic usage" inline>
            @verbatim('docs')
                <x-button label="Primary" />
                <x-button label="Secondary" secondary />
                <x-button label="Tertiary" tertiary />
                <x-button label="Warning" warning />
                <x-button label="Info" info />
                <x-button label="Danger" danger />
                <x-button label="Success" success />
            @endverbatim
        </x-code-block>

        <x-code-block title="Size variants">
            @verbatim('docs')
                <x-button label="Button" sm />
                <x-button label="Button" /> {{-- default --}}
                <x-button label="Button" lg />
                <x-button label="Button" xl />
                <x-button label="Button" xxl />
            @endverbatim
        </x-code-block>

        <x-code-block title="Rounded corner" inline>
            @verbatim('docs')
                <x-button label="Rounded none" rounded-none />
                <x-button label="Rounded sm" rounded-sm />
                <x-button label="Rounded Default" />
                <x-button label="Rounded md" rounded-md />
                <x-button label="Rounded lg" rounded-lg />
                <x-button label="Rounded xl" rounded-xl />
                <x-button label="Rounded 2xl" rounded-2xl />
                <x-button label="Rounded 3xl" rounded-3xl />
                <x-button label="Rounded full" rounded-full />
            @endverbatim
        </x-code-block>

        <x-code-block title="Color variants" inline>
            @verbatim('docs')
                <x-button label="Black" black />
                <x-button label="White" white />
                <x-button label="Slate" slate />
                <x-button label="Zinc" zinc />
                <x-button label="Gray" gray />
                <x-button label="Neutral" neutral />
                <x-button label="Stone" stone />
                <x-button label="Red" red />
                <x-button label="Orange" orange />
                <x-button label="Amber" amber />
                <x-button label="Yellow" yellow />
                <x-button label="Lime" lime />
                <x-button label="Green" green />
                <x-button label="Cyan" cyan />
                <x-button label="Sky" sky />
                <x-button label="Purple" purple />
                <x-button label="Fuchsia" fuchsia />
                <x-button label="Pink" pink />
                <x-button label="Rose" rose />
            @endverbatim
        </x-code-block>

        <x-code-block title="Flat buttons" inline>
            @verbatim('docs')
                <x-button label="Black" black flat />
                <x-button label="White" white flat />
                <x-button label="Slate" slate flat />
                <x-button label="Zinc" zinc flat />
                <x-button label="Gray" gray flat />
                <x-button label="Neutral" neutral flat />
                <x-button label="Stone" stone flat />
                <x-button label="Red" red flat />
                <x-button label="Orange" orange flat />
                <x-button label="Amber" amber flat />
                <x-button label="Yellow" yellow flat />
                <x-button label="Lime" lime flat />
                <x-button label="Green" green flat />
                <x-button label="Cyan" cyan flat />
                <x-button label="Sky" sky flat />
                <x-button label="Purple" purple flat />
                <x-button label="Fuchsia" fuchsia flat />
                <x-button label="Pink" pink flat />
                <x-button label="Rose" rose flat />
            @endverbatim
        </x-code-block>

        <x-code-block title="Outline buttons" inline>
            @verbatim('docs')
                <x-button label="Black" black outline />
                <x-button label="White" white outline />
                <x-button label="Slate" slate outline />
                <x-button label="Zinc" zinc outline />
                <x-button label="Gray" gray outline />
                <x-button label="Neutral" neutral outline />
                <x-button label="Stone" stone outline />
                <x-button label="Red" red outline />
                <x-button label="Orange" orange outline />
                <x-button label="Amber" amber outline />
                <x-button label="Yellow" yellow outline />
                <x-button label="Lime" lime outline />
                <x-button label="Green" green outline />
                <x-button label="Cyan" cyan outline />
                <x-button label="Sky" sky outline />
                <x-button label="Purple" purple outline />
                <x-button label="Fuchsia" fuchsia outline />
                <x-button label="Pink" pink outline />
                <x-button label="Rose" rose outline />
            @endverbatim
        </x-code-block>

        <x-code-block title="Button with icon" inline>
            @verbatim('docs')
                <x-button label="Home" icon="home" purple />
                <x-button label="Delete" icon="trash" red />
                <x-button label="View" icon="eye" gray />
                <x-button label="Edit" icon="pencil-square" amber />
                <x-button label="Save" icon="bookmark-square" green />

                <x-button label="Home" icon="home" purple outline />
                <x-button label="Delete" icon="trash" red outline />
                <x-button label="View" icon="eye" gray outline />
                <x-button label="Edit" icon="pencil-square" amber outline />
                <x-button label="Save" icon="bookmark-square" green outline />

                <x-button label="Home" icon="home" purple flat />
                <x-button label="Delete" icon="trash" red flat />
                <x-button label="View" icon="eye" gray flat />
                <x-button label="Edit" icon="pencil-square" amber flat />
                <x-button label="Save" icon="bookmark-square" green flat />
            @endverbatim
        </x-code-block>

        <x-code-block title="Circle buttons" inline>
            @verbatim('docs')
                <x-button icon="home" purple outline sm circle />
                <x-button icon="trash" red outline sm circle />
                <x-button icon="eye" gray outline sm circle />
                <x-button icon="pencil-square" amber outline sm circle />
                <x-button icon="bookmark-square" green outline sm circle />
                <x-button icon="archive-box-x-mark" rose outline sm circle />
                <x-button icon="bars-3" gray outline sm circle />
                <x-button icon="bell" blue outline sm circle />
                <x-button icon="chat-bubble-left-ellipsis" fuschsia outline sm circle />
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Size variants" />
            <x-on-this-page.item title="Rounded corner" />
            <x-on-this-page.item title="Color variants" />
            <x-on-this-page.item title="Flat buttons" />
            <x-on-this-page.item title="Outline buttons" />
            <x-on-this-page.item title="Button with icon" />
            <x-on-this-page.item title="Circle buttons" />
        </x-on-this-page>
    @endslot
</div>
