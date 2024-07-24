<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Tallcraftui - Installation')] class extends Component {
    //
}; ?>

<div>
    <x-slot name="content">
        <x-heading title="Installation" subtitle="Introduction"/>

        <div class="space-y-5">
            <h2 id="requirements" class="pt-5 group">
                <a href="#requirements"
                    class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
                Requirements
            </h2>

            <ul class="pl-4 space-y-1 text-teal-500 list-disc">
                <li><a href="#">Laravel 11</a></li>
                <li><a href="#">Livewire 3</a></li>
                <li><a href="#">Alpine.js 3</a></li>
                <li><a href="#">Tailwindcss 3</a></li>
            </ul>
        </div>

        <x-code-block title="Installation" language="bash" no-render>
            @verbatim('docs')
                composer require developermithu/tallcraftui
                
                php artisan install:tallcraftui
            @endverbatim
        </x-code-block>
        
        <p>Modify <code>tailwind.config.js</code> </p>

        <x-code-block language="js" no-render>
            @verbatim('docs')
                export default {
                    theme: {
                        extend: { 
                            // .....
                            
                            colors: { 
                                primary: "#6d28d9",
                                secondary: "#a21caf",
                                tertiary: "#00BBC9",
                                danger: "#b91c1c",
                                warning: "#a16207",
                                success: "#15803d",
                                info: "#1d4ed8",
                            },
                        },
                    },
                };            
            @endverbatim
        </x-code-block>
        
        <p>Then start the development server:</p>

        <x-code-block language="bash" no-render>
            @verbatim('docs')
                pnpm dev # or `npm run dev`
            @endverbatim
        </x-code-block>

        <p>Now you can use <code>tallcraftui</code> like this:</p>

        <x-code-block no-render>
            @verbatim('docs')
                <x-button label="Button" />
            @endverbatim
        </x-code-block>

        <x-code-block no-render title="Publish the configuration file" language="bash">
            @verbatim('docs')
                php artisan vendor:publish --tag=tallcraftui-config
            @endverbatim
        </x-code-block>

        <x-code-block no-render language="php">
            @verbatim('docs')
                return [
                /**
                * Default prefix for all components
                *
                * Note: After changing the prefix, clear the view cache
                * using `php artisan view:clear`
                *
                * Examples:
                * prefix => '' // <x-input />
                * prefix => 'tall-' // <x-tall-input />
                *
                */
                'prefix' => '',
                ];
            @endverbatim
        </x-code-block>

        <p>After renaming, ensure you clear the view cache:</p>

        <pre><x-torchlight-code language='bash'>
            php artisan view:clear
        </x-torchlight-code></pre>
    </x-slot>

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Requirements" />
            <x-on-this-page.item title="Installation" />
            <x-on-this-page.item title="Publish the configuration file" />
        </x-on-this-page>
    @endslot
</div>
