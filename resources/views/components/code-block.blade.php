@props(['title' => '', 'language' => 'blade', 'noRender' => false])

@php
    $slug = Str::slug($title);
    $code = (string) Str::of($slot);

    if (Str::contains($code, "('docs')")) {
        $code = Str::replace("('docs')", '', $code);
        $code = trim($code);
    }
@endphp

<div x-data="{ visible: {{ $noRender ? 'true' : 'false' }} }" @class(['space-y-3 code-container', 'pt-5' => $title])>
    @if ($title)
        <div class="flex items-center justify-between">
            <h2 id="{{ $slug }}" class="group">
                <a href="#{{ $slug }}"
                    class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
                {{ $title }}
            </h2>

            @if (!$noRender)
                <x-button @click="visible = !visible" icon="code-bracket" flat sm />
            @endif
        </div>
    @endif

    <div>
        @if (!$noRender)
            <div x-show="!visible" x-cloak class="p-5 space-y-4 border rounded-lg dark:border-slate-700 md:p-7">
                <?php echo Blade::render($code); ?>
            </div>
        @endif

        <div x-show="visible" x-cloak class="relative">
            <pre><x-torchlight-code language="{{ $language }}" class="space-y-4 code">
                {!! $code !!}
            </x-torchlight-code></pre>

            <x-copy-button />
        </div>
    </div>
</div>
