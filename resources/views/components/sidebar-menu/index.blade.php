@props(['title', 'count' => null])

<li>
    <div class="flex items-center gap-3">
        <h2 class="text-base font-medium" style="word-spacing: 5px">
            {{ $title ?? 'Menu title' }}
        </h2>

        @if ($count)
            <x-badge label="{{ $count }}" sm primary />
        @endif
    </div>

    <ul role="list"
        class="mt-2 space-y-2 border-l-2 border-slate-100 lg:mt-4 lg:space-y-3 lg:border-slate-200 dark:border-slate-800">
        {{ $slot }}
    </ul>
</li>
