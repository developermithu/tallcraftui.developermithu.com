<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Installation - Tallcraftui')] class extends Component {
    //
}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags title="Installation - Tallcraftui" />
    @endslot

    <x-slot name="content">
        <x-heading title="Installation" subtitle="Introduction" />

        <div class="space-y-5">
            <h2 id="requirements" class="pt-5 group">
                <a href="#requirements"
                    class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
                Requirements
            </h2>

            <ul class="pl-4 space-y-1 text-teal-500 list-disc">
                <li><a href="https://www.php.net/releases/8.2/en.php" target="_blank">PHP 8.2</a></li>
                <li><a href="https://laravel.com/docs/11.x" target="_blank">Laravel 10 or above</a></li>
                <li><a href="https://livewire.laravel.com" target="_blank">Livewire 3.x</a></li>
                <li><a href="https://alpinejs.dev" target="_blank">Alpine.js 3.x</a></li>
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

        <x-code language="js">
            @verbatim
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
        </x-code>

        <p>Then start the development server:</p>

        <x-code language="bash">
            @verbatim
                pnpm dev # or `npm run dev`
            @endverbatim
        </x-code>

        <p>Now you can use <code>tallcraftui</code> like this:</p>

        <x-code>
            @verbatim
                <x-button label="Button" />
            @endverbatim
        </x-code>

        <x-code-block no-render title="Publish the configuration file" language="bash">
            @verbatim('docs')
                php artisan vendor:publish --tag=tallcraftui-config
            @endverbatim
        </x-code-block>

        <x-code language="php">
            @verbatim
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
        </x-code>

        <p>After renaming, ensure you clear the view cache:</p>

        <x-code language='bash'>
            php artisan view:clear
        </x-code>
    </x-slot>

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Requirements" />
            <x-on-this-page.item title="Installation" />
            <x-on-this-page.item title="Publish the configuration file" />
        </x-on-this-page>
    @endslot
</div>
