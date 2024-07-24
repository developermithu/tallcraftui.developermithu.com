<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.home')] #[Title('Tallcraftui - Tallstack Components')] class extends Component {
    //
}; ?>

<div>
    <div class="relative px-6 isolate pt-14 lg:px-8">
        <div class="max-w-2xl py-12 mx-auto md:py-16 lg:py-28">
            {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative px-3 py-1 text-sm leading-6 text-gray-600 rounded-full ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Browse our some premium themes & scripts. <a href="#"
                        class="font-semibold text-indigo-600"><span class="absolute inset-0"
                            aria-hidden="true"></span>Visit <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div> --}}
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-slate-700 dark:text-slate-100 sm:text-6xl">
                    Boost your productivity with <span
                        class="text-transparent bg-gradient-to-r from-teal-500 to-indigo-500 bg-clip-text">TallCraftUI</span>
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                    TallCraftUI is a versatile and customizable UI package designed for the TALL
                    stack (<span class="font-semibold ">Tailwindcss, Alpine.js, Laravel, Livewire</span>).
                </p>
                <div class="flex flex-wrap items-center justify-center mt-10 gap-y-3 gap-x-6">
                    <x-code language="bash" no-copy>
                        @verbatim
                            composer require developermithu/tallcraftui
                        @endverbatim
                    </x-code>

                    <a wire:navigate href="{{ route('docs.installation') }}"
                        class="px-7 py-2.5 text-white max-w-[375px] w-full sm:w-fit font-medium rounded bg-gradient-to-r from-teal-500 to-indigo-500 hover:opacity-95">Get
                        started</a>
                </div>
            </div>
        </div>
    </div>
</div>
