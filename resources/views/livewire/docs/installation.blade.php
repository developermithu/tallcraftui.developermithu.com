<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Installation - Tallcraftui')] class extends Component {
    //
}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags
            title="Quick Start Guide: Install TallCraftUI for Laravel Projects"
            description="Learn how to easily integrate TallCraftUI into your Laravel project. Get started with our modern, responsive UI components in minutes with step-by-step installation instructions." />
    @endslot

    <x-slot name="content">
        <x-heading title="Installation" subtitle="Introduction">
            @slot('description')
                For <a href="https://laravel.com/docs/12.x" target="_blank" rel="noopener">Laravel 12</a> new applications, 
                we recommend using <a href="https://github.com/developermithu/tallcraftui/releases/tag/v2.0-beta" target="_blank" rel="noopener">TallCraftUI v2 beta</a>. 
                This version comes with built-in support for <strong>Tailwind 4</strong>.
            @endslot
        </x-heading>

        <div class="space-y-5">
            <h2 id="requirements" class="pt-5 group">
                <a href="#requirements"
                    class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
                Requirements
            </h2>

            <ul class="pl-4 space-y-1 text-teal-500 list-disc">
                <li><a href="https://www.php.net/releases/8.2/en.php" target="_blank">PHP 8.1 or above</a></li>
                <li><a href="https://laravel.com/docs/11.x" target="_blank">Laravel 10, 11 or 12</a></li>
                <li><a href="https://livewire.laravel.com" target="_blank">Livewire 3.x</a></li>
                <li><a href="https://tailwindcss.com" target="_blank">TailwindCSS 3.x</a></li>
            </ul>
        </div>

        <x-code-block title="Installation" language="bash" no-render>
            @verbatim('docs')
                composer require developermithu/tallcraftui
            @endverbatim
        </x-code-block>

        <x-code language="bash">
            @verbatim
                php artisan install:tallcraftui
            @endverbatim
        </x-code>
    
        <p>Modify <code>tailwind.config.js</code> </p>

        <x-code language="js" space-none>
            @verbatim
                export default {
                    darkMode: "class",
                    
                    theme: {
                        extend: {
                            // .....

                            colors: {
                                primary: "#6d28d9",
                                secondary: "#a21caf",
                            },
                        },
                    },
                };
            @endverbatim
        </x-code>

        <p>Start the development server, and you're all set to begin working:</p>

        <x-code language="bash">
            @verbatim
                pnpm dev # or `npm run dev`
            @endverbatim
        </x-code>

        {{-- Upgrade to tailwind 4 guide --}}
        <x-code-block title="Upgrade to Tailwind 4" language="bash" no-render>
            @slot('description')
                If you're using <strong>TailwindCSS 3</strong>, you can upgrade to <strong>TailwindCSS 4</strong> by running the following single command. For more information, refer to the official <a href="https://tailwindcss.com/docs/upgrade-guide" target="_blank">TailwindCSS Upgrade Guide</a>.
            @endslot

            @verbatim('docs')
                npx @tailwindcss/upgrade
            @endverbatim
        </x-code-block>
        
        <x-code-block no-render title="Publish the configuration file (optional)" language="bash">
            @slot('description')
                To rename TallCraftUI or customize component settings, publish the configuration file:
            @endslot
            
            @verbatim('docs')
                php artisan vendor:publish --tag=tallcraftui-config
            @endverbatim
        </x-code-block>

        <x-code language="php" space-none>
            @verbatim
                return [
                    /**
                    * --------------------------------------------------------------------------
                    * Default Component Prefix
                    * --------------------------------------------------------------------------
                    *
                    * The prefix applied to all components. After changing this value, be sure
                    * to clear the view cache using `php artisan view:clear`.
                    *
                    * Examples:
                    *
                    * 'prefix' => ''       // <x-input />
                    * 'prefix' => 'tc-'    // <x-tc-input />
                    * 
                    */
                    'prefix' => env('TALLCRAFTUI_PREFIX', ''),
                ];            
            @endverbatim
        </x-code>

        <p>Add <code>TALLCRAFTUI_PREFIX</code> variable to your <code>.env</code> file:</p>

        <x-code language="env">
            @verbatim
                TALLCRAFTUI_PREFIX=""           
            @endverbatim
        </x-code>

        <p>After modifying, ensure you clear the view cache:</p>

        <x-code language='bash'>
            php artisan view:clear
        </x-code>

        <x-code-block title="Existing projects" no-render>
            @slot('description')
                When working with existing projects that utilize <strong>Jetstream</strong> or <strong>Breeze</strong>, the installer will automatically publish a <code>config/tallcraftui.php</code> file, applying a global <code>tc-</code> prefix on TallCraftUI components to prevent naming conflicts. Therefore, you'll need to use components like this: 
            @endslot
            
            @verbatim('docs')
                <x-tc-button /> 
            @endverbatim
        </x-code-block>
    </x-slot>

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Requirements" />
            <x-on-this-page.item title="Installation" />
            <x-on-this-page.item title="Upgrade to Tailwind 4" new />
            <x-on-this-page.item title="Publish the configuration file (optional)" />
            <x-on-this-page.item title="Existing projects" />
        </x-on-this-page>
    @endslot
</div>
