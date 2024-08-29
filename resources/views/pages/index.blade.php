<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.home')] #[Title('TallCraftUI - Laravel Blade UI Components Library for TALL Stack')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $user_id = '';
    public string $portfolio = '';
    public bool $terms;

    public function createUser()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'portfolio' => ['required', 'string', 'url', 'max:255'],
            'terms' => ['required', 'boolean'],
        ]);

        dd('fr');
    }
}; ?>

<div>
    @slot('metaTags')
        <x-meta-tags title="TallCraftUI - Laravel Blade UI Components Library for TALL Stack"
            description="TallCraftUI is a Laravel blade UI components library for TALL stack, offering 20+ customizable components that seamlessly integrate with Livewire applications." />
    @endslot

    <div class="container relative px-6 isolate pt-14 lg:px-8">
        <div class="max-w-2xl py-12 mx-auto lg:max-w-3xl md:py-16 lg:pt-28">
            {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative px-3 py-1 text-sm leading-6 text-gray-600 rounded-full ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Browse our some premium themes & scripts. <a href="#"
                        class="font-semibold text-indigo-600"><span class="absolute inset-0"
                            aria-hidden="true"></span>Visit <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div> --}}
            <div class="text-center"> 
                {{-- <h1
                    class="text-2xl font-bold tracking-tight xxs:text-3xl xs:text-4xl text-slate-700 dark:text-slate-100 sm:text-5xl">
                    Laravel Livewire Blade UI Components for the TALL Stack</h1> --}}

                <h1
                    class="text-2xl font-bold tracking-tight xxs:text-3xl xs:text-4xl text-slate-700 dark:text-slate-100 sm:text-5xl">
                    Boost Your TALL Stack Development with <span
                        class="text-transparent bg-gradient-to-r from-teal-500 to-indigo-500 bg-clip-text">TallCraftUI</span>
                </h1>

                <h2
                    class="mt-6 text-sm leading-normal text-gray-600 xxs:text-base md:leading-8 sm:text-lg dark:text-gray-300">
                    <strong>TallCraftUI</strong> is a Laravel blade <strong>UI components</strong> library for the TALL Stack (<strong>TailwindCSS, Alpine.js, Laravel, Livewire</strong>), offering  <strong class="border-b-2 pb-0.5 border-primary">20+ beautifully crafted</strong>, customizable <strong>components</strong>.                    
                </h2>

                <div class="flex flex-wrap items-center justify-center mt-10 gap-y-3 gap-x-6">
                    <x-code language="bash" class="max-w-full" no-copy>
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

        <div class="max-w-4xl pb-20 m-auto">
            <x-code-block title="Basic form">
                @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id')->take(5);
                @endphp

                @if ($errors->any())
                    <x-alert :errors="$errors->all()" red />
                @endif
                
                <form wire:submit="createUser" class="space-y-4">
                    <x-input label='Name *' wire:model="name" placeholder="Name" icon="user" />
                    <x-input label='Email *' wire:model="email" placeholder="Email" suffix="@gmail.com" />
                    <x-input label='Portfolio *' wire:model="portfolio" prefix="https://" placeholder="example.com" />
                    <x-select label='Users' wire:model="user_id" :options="$users" />
                    <x-checkbox wire:model='terms' label="Accept the terms and conditions *" />

                    <div class="flex justify-end">
                        <x-button label="Submit" spinner="createUser" />
                    </div>
                </form>
                @endverbatim
            </x-code-block>
        </div>

        <section class="max-w-4xl pb-20 m-auto">
            <h2 class="pb-3 text-2xl font-semibold text-center xxs:text-3xl sm:text-4xl">Breeze vs Jetstream vs TallCraftUI
            </h2>

            <x-code-block title="Breeze" no-render no-copy>
                @verbatim
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                @endverbatim
            </x-code-block>

            <x-code-block title="Jetstream" no-render no-copy>
                @verbatim
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required />
                @endverbatim
            </x-code-block>

            <x-code-block title="TallCraftUI" no-render no-copy>
                @verbatim
                <x-input label="Name *" wire:model="name" />
                @endverbatim
            </x-code-block>
        </section>
    </div>
</div>
