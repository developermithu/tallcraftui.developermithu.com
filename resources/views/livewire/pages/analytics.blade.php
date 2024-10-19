<div>
    <div wire:poll.10s class="max-w-2xl mx-auto">
        <div class="flex justify-center pb-3">
            <x-spinner wire:loading.class="!visible" class="invisible" bars sm />
        </div>

        <x-table no-loading>
            <x-slot:heading>
                <x-th label="Name" />
                <x-th sortable :$sortCol :$sortAsc label="Impressions" />
                <x-th sortable :$sortCol :$sortAsc label="Hovers" />
                <x-th sortable :$sortCol :$sortAsc label="Clicks" />
            </x-slot:heading>

            @forelse ($analytics as $analytic)
                <x-tr>
                    <x-td :label="$analytic->name" />
                    <x-td :label="$analytic->impressions" />
                    <x-td :label="$analytic->hovers" />
                    <x-td :label="$analytic->clicks" />
                </x-tr>
            @empty
                <x-not-found />
            @endforelse
        </x-table>
    </div>
</div>
