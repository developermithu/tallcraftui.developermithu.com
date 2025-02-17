@props(['href', 'title', 'external' => false, 'new' => false, 'update' => false])

@php
    $isActive = request()->url() === $href;
@endphp

<li @class(['relative leading-6', 'flex items-center gap-4' => $new])>
    <a href="{{ $href }}" {{ $external ? 'target="_blank"' : 'wire:navigate' }}
        {{ $attributes->class([
            'pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full hover:before:block',
            'font-semibold text-teal-500 dark:text-teal-500 before:bg-teal-500 dark:before:bg-teal-600 before:block' => $isActive,
            'text-slate-500 dark:text-slate-400 before:bg-slate-300 before:hidden hover:text-slate-600 dark:hover:text-slate-300 dark:before:bg-slate-600' => !$isActive,
        ]) }}>
        {{ Str::ucfirst($title) }}
    </a>

    @if ($new)
        <span class="px-1 text-xs rounded text-rose-500 animate-pulse bg-rose-100 dark:bg-rose-200">New</span>
    @endif

    @if ($update)
        <span class="px-1 text-xs rounded text-amber-500 animate-pulse bg-amber-100 dark:bg-amber-200">Update</span>
    @endif
</li>
