<x-card data-pan="table-card">
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
