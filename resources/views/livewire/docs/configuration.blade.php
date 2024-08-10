<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Configurations - Tallcraftui')] class extends Component {
    //
}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags title="Configurations - Tallcraftui" description="Tallcraftui Configurations" />
    @endslot

    @slot('content')
        <x-heading title="Configurations" subtitle="TallCraftUI" description="Customize the default behavior and appearance of the component by editing the configuration file." />
            
        <x-code-block title="Publish the configuration file" language="bash" no-render>
            @slot('description')
                <p>Run the following command to publish the <code>tallcraftui.php</code> configuration file:</p>
            @endslot
            
            @verbatim('docs')
                php artisan vendor:publish --tag=tallcraftui-config
            @endverbatim
        </x-code-block>
            
        <x-code language="php">
            @verbatim
                return [
                    /**
                    * 
                    * ==================================
                    * Default prefix for all components
                    * ==================================
                    *
                    * Note: After changing the prefix, clear the view cache
                    * using `php artisan view:clear`
                    *
                    * Examples:
                    *
                    * prefix => ''       // <x-input />
                    * prefix => 'tc-'   // <x-tc-input />
                    *
                    */
                    'prefix' => '',
                
                    /**
                    * 
                    * type => Allowed: heroicons
                    * style => Allowed: outline, solid
                    *
                    */
                    'icons' => [
                        'type' => 'heroicons',
                        'style' => 'outline',
                    ],
                
                    /**
                    * 
                    * border-radius => Allowed: rounded, rounded-sm, rounded-md, rounded-lg, rounded-xl, rounded-2xl, rounded-3xl, rounded-full, rounded-none
                    *
                    */
                    'alert' => [
                        'border-radius' => 'rounded',
                    ],
                
                    'badge' => [
                        'border-radius' => 'rounded',
                    ],
                
                    'breadcrumb' => [
                        'border-radius' => 'rounded',
                    ],
                
                    /**
                    * 
                    * size => Allowed: sm, md, lg, xl, 2xl
                    *
                    */
                    'button' => [
                        'border-radius' => 'rounded',
                        'size' => 'md',
                    ],
                
                    /**
                    * 
                    * size => Allowed: sm, md, lg, xl, 2xl
                    *
                    */
                    'checkbox' => [
                        'border-radius' => 'rounded',
                        'size' => 'md',
                    ],
                
                    /**
                    * 
                    * position => Allowed: top, bottom, left, right
                    * size => Allowed: w-20, w-24, w-28, w-32, w-36, w-40, w-44, w-48, w-52, w-56, w-60, w-64, w-72, w-80, w-96, w-full
                    *
                    */
                    'dropdown' => [
                        'border-radius' => 'rounded',
                        'position' => 'top',
                        'size' => 'w-48',
                    ],
                
                    'input' => [
                        'border-radius' => 'rounded',
                    ],
                
                    /**
                    * 
                    * size => Allowed: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full
                    * blur => Allowed: true, false
                    * position => Allowed: top, bottom, left, right, center
                    *
                    */
                    'modal' => [
                        'border-radius' => 'rounded-lg',
                        'size' => 'lg',
                        'blur' => false,
                        'position' => 'top',
                    ],
                
                    /**
                    * 
                    * size => Allowed: sm, md, lg, xl, 2xl
                    *
                    */
                    'radio' => [
                        'size' => 'md',
                    ],
                
                    'select' => [
                        'border-radius' => 'rounded',
                    ],
                
                    'textarea' => [
                        'border-radius' => 'rounded',
                    ],
                
                    'toggle' => [
                        'border-radius' => 'rounded',
                    ],
                ];            
            @endverbatim
        </x-code>

        <x-code-block title="Clear view cache" language="bash" no-render>
            @slot('description')
                After modifying the configuration file, clear the view cache using the following command:
            @endslot

            @verbatim('docs')
                php artisan view:clear
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Publish the configuration file" />
            <x-on-this-page.item title="Clear view cache" />
        </x-on-this-page>
    @endslot
</div>
