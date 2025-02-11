@props(['title', 'new' => false])

@php
    $slug = Str::slug($title);
@endphp

<li>
    <a class=" text-slate-500 hover:text-slate-600 dark:hover:text-slate-300" href="#{{ $slug }}">
        {{ $title }}
    </a>
    @if ($new)
        <x-badge label="New" amber />
    @endif
</li>
