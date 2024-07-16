@props(['title'])

@php
    $slug = Str::slug($title);
@endphp

<li>
    <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#{{ $slug }}"> {{ $title }} </a>
</li>
