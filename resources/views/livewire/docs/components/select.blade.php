<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new 
#[Layout('components.layouts.app')] 
#[Title('Select components - Tallcraftui')] 
class extends Component {
    public $countries;

    public function with(): array
    {
        $this->countries = collect([
            ['id' => 1, 'name' => 'Nigeria'], 
            ['id' => 2, 'name' => 'Ghana'],
            ['id' => 3, 'name' => 'Togo'], 
            ['id' => 4, 'name' => 'Benin'], 
            ['id' => 5, 'name' => 'Niger']
        ])->pluck('name', 'id');

        return [
            'countries' => $this->countries,
        ];
    }
}; ?>

<div>
    @slot('content')
        <x-heading title="Select" subtitle="Form Components" />

        <x-code-block title="Basic usage">
            @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id');
                @endphp

                <x-select label="Users" wire:model="user_id" :options="$users" />
            @endverbatim
        </x-code-block>

        <x-code-block title="Custom placeholder">
            @verbatim('docs')
                @php
                    $countries = collect([
                        ['id' => 1, 'name' => 'BD'], 
                        ['id' => 2, 'name' => 'USA'],
                        ['id' => 3, 'name' => 'UK'], 
                        ['id' => 4, 'name' => 'RA'],
                        ['id' => 5, 'name' => 'IN']
                    ])->pluck('name', 'id');
                @endphp

                <x-select 
                    label="Countries" 
                    wire:model="country_id" 
                    :options="$countries" 
                    placeholder="Select country" 
                />
            @endverbatim
        </x-code-block>

        <x-code-block title="Custom slot">
            @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id');
                @endphp

                <x-select label="Select user">
                    <option value="">Choose user</option>
                    
                    @foreach ($users as $key => $name)
                        <option value="{{ $key }}"> {{ $name }} </option>
                    @endforeach
                </x-select>
            @endverbatim
        </x-code-block>

        <x-code-block title="With hint">
            @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id');
                @endphp

                <x-select label="Users" wire:model="user_id" :options="$users" hint="Only one user can be select" />
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Custom placeholder" />
            <x-on-this-page.item title="Custom slot" />
            <x-on-this-page.item title="With hint" />
        </x-on-this-page>
    @endslot
</div>
