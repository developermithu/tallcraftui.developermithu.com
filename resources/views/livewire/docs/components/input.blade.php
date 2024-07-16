<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Tallcraftui - Input components')] class extends Component {
    //
}; ?>

<div>
    @slot('content')
        <x-header title="Input" subtitle="From Components" />

        <x-code-block title="Basic usage">
            @verbatim('docs')
                <x-input />
                <x-input placeholder="Your name" />
                <x-input label="Name" placeholder="Your name" />
                <x-input label="Name *" placeholder="Your name" />
                <x-input label="Name *" placeholder="Your name" hint="Enter your full name" />
            @endverbatim
        </x-code-block>

        <x-code-block title="Icon">
            @verbatim('docs')
                <x-input label="Name" icon="user" placeholder="Your name" />
                <x-input label="Name" icon-right="user" placeholder="Your name" />
            @endverbatim
        </x-code-block>

        <x-code-block title="Preffix Suffix">
            @verbatim('docs')
                <x-input label="Website" preffix="https://" placeholder="example.com" />
                <x-input label="Email" suffix="@gmail.com" placeholder="example@gmail.com" />
            @endverbatim
        </x-code-block>

        <x-code-block title="Prepend Append">
            @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id');
                    $countries = collect([
                        ['id' => 1, 'name' => 'BD'],
                        ['id' => 2, 'name' => 'In'],
                        ['id' => 3, 'name' => 'USA'],
                        ['id' => 4, 'name' => 'UK'],
                        ['id' => 5, 'name' => 'Russia'],
                    ])->pluck('name', 'id');
                @endphp

                <x-input label="User">
                    @slot('prepend')
                        <x-select :options="$users" placeholder="User" />
                    @endslot
                </x-input>

                <x-input label="Countries">
                    @slot('append')
                        <x-select :options="$countries" placeholder="Country" />
                    @endslot
                </x-input>
            @endverbatim
        </x-code-block>

        <x-code-block title="Inline">
            @verbatim('docs')
                <x-input placeholder="Your name" inline />
                <x-input label="Name" placeholder="Your name" inline />
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <ol role="list" class="mt-4 space-y-2 text-sm">
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#basic-usage"> Basic usage </a>
            </li>
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#icon">Icon</a>
            </li>
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#preffix-suffix"> preffix-suffix </a>
            </li>
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#prepend-append"> prepend-append </a>
            </li>
            <li>
                <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#inline"> inline </a>
            </li>
        </ol>
    @endslot
</div>
