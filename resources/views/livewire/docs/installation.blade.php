<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Tallcraftui - Installation')] class extends Component {
    //
}; ?>

<div>
    <x-slot name="content">
        <header class="space-y-1 mb-9">
            <p class="text-sm font-medium text-teal-500 font-display">
                Introduction
            </p>

            <h1>
                Installation
            </h1>

            <div>
                <p class="py-9">
                    Quasi sapiente voluptates aut minima non doloribus similique
                    quisquam. In quo expedita ipsum nostrum corrupti incidunt. Et
                    aut eligendi ea perferendis.
                </p>
                <hr class="border-0 h-[1px] bg-teal-900/10 dark:bg-teal-500/20" />
            </div>
        </header>

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

            <h2 id="installation" class="pt-5 group">
                <a href="#installation"
                    class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
                Installation
            </h2>

            <pre><x-torchlight-code language='bash'>
                    composer require developermithu/tallcraftui
                    
                    php artisan install:tallcraftui
                </x-torchlight-code></pre>

            <p>Then start the development server:</p>

            <pre><x-torchlight-code language='bash'>
                  pnpm dev # or `npm run dev`
                </x-torchlight-code></pre>

            <p>Now you can use `tallcraftui` like this:</p>

            <pre><x-torchlight-code language='blade'>@verbatim
                <x-button label="Button" />@endverbatim
</x-torchlight-code></pre>

            <h2 id="configuration" class="pt-5 group">
                <a href="#configuration"
                    class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
                Publish the configuration file
            </h2>

            <p>To rename tallcraftui components with a custom prefix, first publish the configuration file:</p>

            <pre><x-torchlight-code language='bash'>
                php artisan vendor:publish --tag=tallcraftui-config
              </x-torchlight-code></pre>

            <pre><x-torchlight-code language='bash'>@verbatim
                return [
                    /**
                    * Default prefix for all components
                    * 
                    * Note: After changing the prefix, clear the view cache 
                    * using `php artisan view:clear`
                    *
                    * Examples:
                    * prefix => ''         // <x-input />
                    * prefix => 'tall-'    // <x-tall-input />
                    *
                    */
                    'prefix' => '',
                ];@endverbatim
</x-torchlight-code></pre>

            <p>After renaming, ensure you clear the view cache:</p>

            <pre><x-torchlight-code language='bash'>
                php artisan view:clear
            </x-torchlight-code></pre>
        </div>
    </x-slot>

    <x-slot name="aside">
        <ol role="list" class="mt-4 space-y-2 text-sm">
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#requirements"> Requirements </a>
            </li>
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#installation">Installtion</a>
            </li>
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#configuration"> Configuration </a>
            </li>
        </ol>
    </x-slot>
</div>
