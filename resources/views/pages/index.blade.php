<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};
use App\Models\User;
use Illuminate\Validation\Rules\Password;

new #[Layout('components.layouts.home')] #[Title('TallCraftUI - Laravel Blade UI Components Library for TALL Stack')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $user_id = '';
    public string $password = 'password';
    public string $color = '#14b8a6';
    public string $textarea = '';
    public bool $terms;

    public string $activeTab = 'tab1';
    public bool $openModal = false;
    public bool $openDrawer = false;

    public function createUser()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
            'color' => ['required', 'string', 'hex_color'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
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

    <div class="container relative isolate">
        <div class="grid grid-cols-12 py-12 gap-y-8 lg:gap-x-8 md:py-16">
            <aside class="col-span-full lg:col-span-5">
                <h1 class="mb-4 text-4xl font-bold sm:text-5xl">A TALL Stack UI Library</h1>
                <h4 class="mb-6 text-lg text-gray-600 dark:text-gray-300 sm:text-xl">
                    TallCraftUI is a Laravel blade UI components library for the TALL Stack (TailwindCSS, Alpine.js,
                    Laravel, Livewire) projects, offering <span class="border-b-2 pb-0.5 border-primary">25+ beautifully
                        crafted</span>, customizable components.
                </h4>

                <div class="flex flex-col items-center gap-y-4 gap-x-5 sm:flex-row">
                    <x-button data-pan="get-started-button" :link="route('docs.installation')" label="Get Started"
                        class="w-full py-3 sm:w-fit sm:py-2.5" />
                    <x-button data-pan="view-github-button" external
                        link="https://github.com/developermithu/tallcraftui" outline
                        class="w-full py-3 sm:w-fit sm:py-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="size-4">
                            <path
                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                            <path d="M9 18c-4.51 2-5-2-7-2" />
                        </svg>
                        View on GitHub
                    </x-button>
                </div>

                {{-- Form, Alert --}}
                <div class="space-y-5 md:space-y-6 mt-14">
                    {{-- Form Components --}}
                    <x-card>
                        <x-card-header title="Form Components" />
                        <x-card-content>
                            @php
                                $users = App\Models\User::pluck('name', 'id')->take(5);
                            @endphp

                            @if ($errors->any())
                                <x-alert :errors="$errors->all()" red />
                            @endif

                            <form wire:submit="createUser" class="space-y-4">
                                <x-input label='Name *' wire:model="name" placeholder="Name"
                                    icon="user" />
                                <x-input label='Email *' wire:model="email"
                                    placeholder="Email" suffix="@gmail.com" />
                                <x-password label="Password *" wire:model="password"
                                    generate />
                                <x-color-picker label="Color picker *"
                                    wire:model="color" />
                                <x-textarea label="Textarea" wire:model="textarea"
                                    class="min-h-16" auto-resize />
                                <x-select label='Users *' wire:model="user_id"
                                    :options="$users" />
                                <div class="flex flex-wrap items-center gap-4">
                                    <x-radio label="Radio" />
                                    <x-checkbox label="Checkbox" />
                                    <x-toggle wire:model='terms' label="Toggle *" sm />
                                </div>
                                <div class="flex justify-end">
                                    <x-button label="Submit" spinner="createUser" />
                                </div>
                            </form>
                        </x-card-content>
                    </x-card>

                    {{-- Alert Components --}}
                    <x-card>
                        <x-card-header title="Alert Components" />
                        <x-card-content>
                            <div class="space-y-2">
                                <x-alert title="Default" />
                                <x-alert title="Danger" dismissible red />
                                <x-alert title="Warning" dismissible amber />
                                <x-alert title="Info" dismissible blue />
                                <x-alert title="Success" dismissible success />
                                <x-alert icon="rocket-launch" title="Alert with description"
                                    description="Lorem, ipsum dolor sit amet consectetur adipisicing." purple
                                    dismissible />
                            </div>
                        </x-card-content>
                    </x-card>

                    {{-- Avatar Components --}}
                    <x-card>
                        <x-card-header title="Avatar Components" class="flex items-center gap-3">
                            <x-badge label="New" amber />
                        </x-card-header>
                        <x-card-content>
                            <div class="space-y-3">
                                <div class="flex flex-wrap items-start gap-x-3 gap-y-2">
                                    <x-avatar lg />
                                    <x-avatar text="tallcraftui" lg />
                                    <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" lg />
                                    <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" badge lg />
                                    <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" ring lg />
                                    <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" ring badge lg />
                                    <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" rounded ring badge
                                        badge-position="bottom" lg />
                                </div>

                                <div class="flex flex-wrap items-start gap-x-3 gap-y-2">
                                    <x-avatars stacked plus="99" ring lg>
                                        <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" ring lg />
                                        <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" ring lg />
                                        <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" ring lg />
                                        <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" ring lg />
                                        <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" ring lg />
                                    </x-avatars>
                                </div>
                            </div>
                        </x-card-content>
                    </x-card>

                    {{-- Breadcrumb Components --}}
                    <x-card>
                        <x-card-header title="Breadcrumb Components" />
                        <x-card-content>
                            <div class="flex flex-col gap-4">
                                <x-breadcrumb>
                                    <x-breadcrumb-item class:icon="size-5" label="Home" :href="route('home')"
                                        icon="home" />
                                    <x-breadcrumb-item class:icon="size-5" label="Button" :href="route('docs.components.button')" />
                                    <x-breadcrumb-item class:icon="size-5" label="Input" :href="route('docs.components.input')" />
                                    <x-breadcrumb-item class:icon="size-5" label="icon" />
                                </x-breadcrumb>

                                <x-breadcrumb>
                                    <x-breadcrumb-item class:icon="size-5" label="Home" :href="route('home')"
                                        icon="home" />
                                    <x-breadcrumb-item class:icon="size-5" label="Button" :href="route('docs.components.button')"
                                        icon="slash" />
                                    <x-breadcrumb-item class:icon="size-5" label="Input" :href="route('docs.components.input')"
                                        icon="slash" />
                                    <x-breadcrumb-item class:icon="size-5" label="icon" icon="slash" />
                                </x-breadcrumb>

                                <x-breadcrumb>
                                    <x-breadcrumb-item class:icon="size-5" label="Home" :href="route('home')"
                                        icon="home" />
                                    <x-breadcrumb-item class:icon="size-5" label="Button" :href="route('docs.components.button')"
                                        icon="arrow-right" />
                                    <x-breadcrumb-item class:icon="size-5" label="Input" :href="route('docs.components.input')"
                                        icon="arrow-right" />
                                    <x-breadcrumb-item class:icon="size-5" label="icon" icon="arrow-right" />
                                </x-breadcrumb>
                            </div>
                        </x-card-content>
                    </x-card>
                </div>
            </aside>

            {{-- Right Side --}}
            <aside class="space-y-5 md:space-y-6 col-span-full lg:col-span-7">
                <div class="grid items-start grid-cols-12 gap-4">
                    {{-- Accordion --}}
                    <x-card class="col-span-full lg:col-span-7">
                        <x-card-header title="Accordion Component" />
                        <x-card-content>
                            <x-accordion>
                                <x-accordion-item id="item1" title="Accordion Item 1">
                                    Lorem ipsum dolor sit amet consectetur.
                                </x-accordion-item>
                                <x-accordion-item id="item2" title="Accordion Item 2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </x-accordion-item>
                                <x-accordion-item id="item3" title="Accordion Item 3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, cupiditate!
                                </x-accordion-item>
                            </x-accordion>
                        </x-card-content>
                    </x-card>

                    {{-- Components --}}
                    <x-card class="col-span-full lg:col-span-5">
                        <x-card-header title="Components" />
                        <x-card-content>
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <x-button label="Button" sm />
                                <x-dropdown title="Account settings">
                                    @slot('trigger')
                                        <x-button label="Dropdown" outline sm />
                                    @endslot

                                    <x-dropdown-item label="Profile" icon="user" />
                                    <x-dropdown-item label="Update password" icon="key" />
                                    <x-dropdown-item label="Settings" icon="cog-6-tooth" />

                                    <x-separator />

                                    <x-dropdown-item label="Sign out" icon="arrow-right-end-on-rectangle" />
                                </x-dropdown>

                                <x-button x-on:click="$wire.openDrawer = true" label="Drawer" sm />
                            </div>

                            <x-button class="w-full" @click="$wire.openModal = true"
                                label="Open Modal" outline />

                            <x-tab wire:model="activeTab" as="switch">
                                <x-slot name="items">
                                    <x-tab-item id="tab1" label="Tab 1" as="switch" />
                                    <x-tab-item id="tab2" label="Tab 2" as="switch" />
                                </x-slot>

                                <x-tab-content id="tab1"> Tab 1 </x-tab-content>
                                <x-tab-content id="tab2"> Tab 2 </x-tab-content>
                            </x-tab>
                        </x-card-content>
                    </x-card>
                </div>

                <x-range value="58" teal />

                {{-- Menu, Stat, Breadcrumb --}}
                <div class="grid items-start grid-cols-12 gap-4">
                    <div class="space-y-3 col-span-full lg:col-span-4">
                        {{-- Spinner --}}
                        <x-card>
                            <x-card-header title="Spinners" />
                            <x-card-content>
                                <div class="flex gap-5">
                                    <x-spinner />
                                    <x-spinner class="fill-primary size-7" dots />
                                    <x-spinner bars />
                                    <x-spinner pulse />
                                </div>
                            </x-card-content>
                        </x-card>

                        {{-- Clipboard --}}
                        <x-card>
                            <x-card-header title="Clipboards" />
                            <x-card-content>
                                <div class="flex gap-5">
                                    <x-clipboard content="tallcraftui" />
                                    <x-clipboard content="tallcraftui" icon="document" copied-icon="document-check"
                                        copied-text="Custom icon" />
                                    <x-clipboard content="tallcraftui" icon="clipboard-document-list"
                                        x-on:copy="alert(`✅ Copied: ${$event.detail.text}`)" />
                                </div>
                            </x-card-content>
                        </x-card>

                        {{-- Tooltip --}}
                        <x-card>
                            <x-card-header title="Tooltips" />
                            <x-card-content>
                                <div class="flex gap-4">
                                    <x-tooltip text="Top" top />
                                    <x-tooltip text="Bottom" bottom />
                                    <x-tooltip text="Left" left />
                                    <x-tooltip text="Right" right />
                                </div>

                                <div class="flex gap-4">
                                    <x-tooltip text="Custom icon" icon="information-circle" />
                                    <x-tooltip text="Gradient color" icon="information-circle" gradient />
                                    <x-tooltip text="Without arrow" icon="information-circle" no-arrow />
                                    <x-tooltip text="Without transition" icon="information-circle" no-transition />
                                </div>
                            </x-card-content>
                        </x-card>
                    </div>

                    <div class="space-y-3 col-span-full lg:col-span-8">
                        {{-- Icon --}}
                        <x-card>
                            <x-card-header title="Icons" />
                            <x-card-content>
                                <div class="flex flex-wrap gap-5">
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
                                </div>
                            </x-card-content>
                        </x-card>

                        {{-- Badge --}}
                        <x-card>
                            <x-card-header title="Badge" />
                            <x-card-content>
                                <div class="flex flex-wrap gap-5">
                                    <x-badge label="Badge" outline />
                                    <x-badge label="Badge" />
                                    <x-badge label="Badge" icon="bookmark-square" />
                                    <x-badge label="Badge" icon-right="bookmark-square" />
                                </div>
                            </x-card-content>
                        </x-card>

                        {{-- Button --}}
                        <x-card>
                            <x-card-header title="Buttons" />
                            <x-card-content>
                                <div class="flex gap-5">
                                    <x-button icon="home" flat circle />
                                    <x-button icon="home" outline circle />
                                    <x-button icon="home" circle />
                                </div>

                                <div class="flex flex-wrap gap-3">
                                    <x-button label="Button" flat sm />
                                    <x-button label="Button" outline sm />
                                    <x-button label="Button" sm />
                                    <x-button label="Button" icon="plus-circle" sm />
                                    <x-button label="Button" icon-right="plus-circle" sm />
                                </div>
                            </x-card-content>
                        </x-card>
                    </div>
                </div>

                {{-- Table --}}
                <x-card>
                    <x-card-header title="Table Component" />
                    <x-card-content>
                        <x-table hoverable borderless>
                            <x-slot:heading>
                                <x-th label="Id" />
                                <x-th label="Name" />
                                <x-th label="Email" />
                            </x-slot:heading>

                            @forelse (App\Models\User::take(5)->get() as $user)
                                <x-tr>
                                    <x-td :label="$user->id" />
                                    <x-td :label="$user->name" />
                                    <x-td :label="$user->email" />
                                </x-tr>
                            @empty
                                <x-not-found />
                            @endforelse
                        </x-table>
                    </x-card-content>
                </x-card>

                <div class="grid items-start grid-cols-12 gap-4">
                    {{-- Menu --}}
                    <div class="space-y-4 col-span-full xl:col-span-5 2xl:col-span-4">
                        <x-card>
                            <x-card-header title="Menu" />
                            <x-card-content>
                                <x-menu title="Menu Component">
                                    <x-menu-item label="Edit" icon="pencil-square" />
                                    <x-menu-item label="Duplicate" icon="document-duplicate" />

                                    <x-separator />
                                    <x-menu-item label="Archive" icon="archive-box" badge="25" badge-end />
                                    <x-menu-item label="Move" icon="arrow-right-circle" />

                                    <x-separator title="Actions" />
                                    <x-menu-item label="Share" icon="user-plus" badge="New" />
                                    <x-menu-item label="Add to Favorites" icon="heart" />

                                    <x-separator />
                                    <x-menu-item label="Delete" icon="trash" />
                                </x-menu>
                            </x-card-content>
                        </x-card>

                        {{-- Separator --}}
                        <x-card>
                            <x-card-header title="Separator" />
                            <x-card-content>
                                <ul class="flex flex-col">
                                    <li>PHP</li>
                                    <x-separator />
                                    <li>Laravel</li>
                                    <x-separator />
                                    <li>Livewire</li>
                                </ul>
                            </x-card-content>
                        </x-card>
                    </div>

                    {{-- Card --}}
                    <div class="space-y-4 col-span-full xl:col-span-7 2xl:col-span-8">
                        {{-- Stat Components --}}
                        <x-card>
                            <x-card-header title="Stat Components" />
                            <x-card-content>
                                <div class="flex flex-wrap gap-5">
                                    <x-stat icon="users" title="Total users" number="10,500" />
                                    <x-stat icon="users" title="Total users" number="10,500" tooltip
                                        increase="12.5%" />
                                </div>
                            </x-card-content>
                        </x-card>

                        {{-- Card Component --}}
                        <x-card>
                            <x-card-header title="Card Component" />
                            <x-card-content>
                                <x-card class="pb-5">
                                    <x-card-figure img="https://cdn.devdojo.com/images/august2023/wallpaper.jpeg"
                                        alt="Photo caption" hoverable overlay />

                                    <x-card-header title="Card title"
                                        subtitle="Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ratione placeat deserunt dicta qui! Animi!"
                                        class="space-y-2" />
                                </x-card>
                            </x-card-content>
                        </x-card>
                    </div>
                </div>
            </aside>
        </div>

        <section class="max-w-4xl pb-20 m-auto">
            <h2 class="pb-3 text-2xl font-semibold text-center xxs:text-3xl sm:text-4xl">Breeze vs Jetstream vs
                TallCraftUI
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

        {{-- Drawer --}}
        <x-drawer wire:model="openDrawer" title="Drawer Title">
            Drawer content goes here ...
        </x-drawer>

        {{-- Modal --}}
        <x-modal wire:model="openModal" center md>
            <div class="p-6 text-center whitespace-normal">
                <x-icon name="exclamation-circle" class="mx-auto mb-4 text-gray-400 !size-12 dark:text-gray-200" />

                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" style="text-transform: none">
                    {{ __('Are you sure you want to delete this?') }}
                </h3>

                <div class="flex items-center justify-center gap-3">
                    <x-button label="Close" x-on:click="$dispatch('close')" red flat />
                    <x-button label="Yes, delete" flat />
                </div>
            </div>
        </x-modal>
    </div>
</div>
