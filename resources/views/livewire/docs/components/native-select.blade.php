<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new 
#[Layout('components.layouts.app')] 
#[Title('Native Select components - Tallcraftui')] 
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
    @slot('metaTags')
        <x-meta-tags title="Native Select components - Tallcraftui" description="Native Select components - Tallcraftui" />
    @endslot

    @slot('content')
        <x-heading title="Native Select" subtitle="Form Components" />

        <x-code-block title="Basic usage">
            @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id');
                @endphp

                <x-native-select label="Users" wire:model="user_id" :options="$users" />
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

                <x-native-select 
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

                <x-native-select label="Select user">
                    <option value="">Choose user</option>
                    
                    @foreach ($users as $key => $name)
                        <option value="{{ $key }}"> {{ $name }} </option>
                    @endforeach
                </x-native-select>
            @endverbatim
        </x-code-block>

        <x-code-block title="With hint">
            @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id');
                @endphp

                <x-native-select label="Users" wire:model="user_id" :options="$users" hint="Only one user can be select" />
            @endverbatim
        </x-code-block>

      <x-code-block title="Size variants">
            @verbatim('docs')
                @php
                    $users = App\Models\User::pluck('name', 'id');
                @endphp

                <x-native-select label="Default" :options="$users" xs />
                <x-native-select label="Small" :options="$users" sm />
                <x-native-select label="Medium" :options="$users" md />
                <x-native-select label="Large" :options="$users" lg />
                <x-native-select label="Extra large" :options="$users" xl />
            @endverbatim
        </x-code-block> 

        <x-code-block title="With enum class">
            @verbatim('docs')
                @php
                    // enum UserRolesEnum: string
                    // {
                    //     case Admin = 'admin';
                    //     case User = 'user';
                    //     case Moderator = 'moderator';

                    //     public static function options(): array
                    //     {
                    //         return array_column(self::cases(), 'name', 'value');
                    //     }
                    // }
                @endphp

                <x-select wire:model="role" :options="App\Enums\UserRolesEnum::options()" />
            @endverbatim
        </x-code-block>
    @endslot

    @slot('aside')
        <x-on-this-page>
            <x-on-this-page.item title="Basic usage" />
            <x-on-this-page.item title="Custom placeholder" />
            <x-on-this-page.item title="Custom slot" />
            <x-on-this-page.item title="With hint" />
            <x-on-this-page.item title="Size variants" />
            <x-on-this-page.item title="With enum class" new />
        </x-on-this-page>
    @endslot
</div>
