<x-card data-pan="avatar-card">
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
                <x-avatar image="{{ asset('assets/img/avatar.jpg') }}" rounded-sm ring-3 badge badge-position="bottom" lg />
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
