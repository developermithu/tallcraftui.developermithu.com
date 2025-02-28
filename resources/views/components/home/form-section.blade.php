<x-card data-pan="form-card">
    <x-card-header title="Form Components" />
    <x-card-content>
        @php
            $users = App\Models\User::pluck('name', 'id')->take(5);
        @endphp

        @if ($errors->any())
            <x-alert :errors="$errors->all()" red />
        @endif

        <form wire:submit="createUser" class="space-y-4">
            <x-input data-pan="form-input-field" label='Name *' wire:model="name" placeholder="Name" icon="user" />
            <x-input data-pan="form-email-field" label='Email *' wire:model="email" placeholder="Email"
                suffix="@gmail.com" />
            <x-password data-pan="form-password-field" label="Password *" wire:model="password" generate />
            <x-color-picker data-pan="form-color-picker-field" label="Color picker *" wire:model="color" />
            <x-textarea data-pan="form-textarea-field" label="Textarea" wire:model="textarea" class="min-h-16"
                auto-resize />
            <x-select data-pan="form-select-field" label='Users *' wire:model="user_id" :options="$users" />
            <div class="flex flex-wrap items-center gap-4">
                <x-radio data-pan="form-radio-field" label="Radio" />
                <x-checkbox data-pan="form-checkbox-field" label="Checkbox" />
                <x-toggle data-pan="form-toggle-field" wire:model='terms' label="Toggle *" sm />
            </div>
            <div class="flex justify-end">
                <x-button data-pan="form-submit-button" label="Submit" spinner="createUser" />
            </div>
        </form>
    </x-card-content>
</x-card>
