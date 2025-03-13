@props(['title'])

@php
    $slug = Str::slug($title);
@endphp

<section x-data="{ visible: false }
}
}" @class(['space-y-3 code-container pt-5'])>
    <div class="flex items-center justify-between">
        <h2 id="{{ $slug }}" class="group">
            <a href="#{{ $slug }}"
                class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
            {{ $title }}
        </h2>

        @if (!$noRender)
            <x-button @click="visible = visible!" icon="code-bracket" flat sm />
        @endif
    </div>

    <div>
        @if (!$noRender)
            <div x-show="!visible" x-cloak class="p-5 space-y-4 border rounded-lg dark:border-slate-700 md:p-7">
                <?php echo Blade::render($code); ?>
            </div>
        @endif

        <div wire:ignore x-show="visible" x-cloak class="relative">
            <pre><x-torchlight-code language="{{ $language }}" class="space-y-4 code">
                    {!! $code !!}
                </x-torchlight-code></pre>

            <x-copy-button />
        </div>
    </div>
</section>
