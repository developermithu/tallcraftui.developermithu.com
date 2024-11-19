@props([
    'title' => '',
    'language' => 'blade',
    'noRender' => false,
    'inline' => false,
    'new' => false,
    'noCopy' => false,
    'hideButton' => false,
])

@php
    $slug = Str::slug($title);
    $code = (string) Str::of($slot);

    if (Str::contains($code, "('docs')")) {
        $code = Str::replace("('docs')", '', $code);
        $code = trim($code);
    }

    $lines = explode("\n", $code);
    $minIndent = PHP_INT_MAX;

    foreach ($lines as $line) {
        if (trim($line) === '') continue;
        $indent = strlen($line) - strlen(ltrim($line));
        $minIndent = min($minIndent, $indent);
    }

    $cleanedLines = array_map(function ($line) use ($minIndent) {
        if (trim($line) === '') return '';
        return substr($line, $minIndent);
    }, $lines);

    $code = trim(implode("\n", $cleanedLines));
@endphp

<div x-data="{ visible: {{ $noRender ? 'true' : 'false' }} }" @class(['space-y-3 code-container', 'pt-5' => $title])>
    @if ($title)
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <h2 id="{{ $slug }}" class="group">
                    <a href="#{{ $slug }}"
                        class="absolute -ml-8 no-underline transition opacity-0 group-hover:opacity-70">#</a>
                    {{ $title }}
                </h2>

                @if ($new)
                    <x-badge label="New" amber />
                @endif
            </div>

            @if (!$noRender && !$hideButton)
                <x-button @click="visible = !visible" icon="code-bracket" flat sm />
            @endif
        </div>
    @endif

    @isset($description)
        <div>
            {{ $description }}
        </div>
    @endisset

    <div>
        @if (!$noRender)
            <div x-show="!visible" x-cloak @class([
                'p-5 border rounded-lg dark:border-slate-700 md:p-7 flex flex-col flex-wrap gap-4',
                '!flex-row items-center ' => $inline,
            ])>
                <?php echo Blade::render($code); ?>
            </div>
        @endif

        <div x-show="visible" x-cloak class="relative">
            <pre><x-torchlight-code language="{{ $language }}" @class([
                "space-y-2 code",
                '!space-y-0' => $attributes->get('space-none'),
                '!space-y-0.5' => $attributes->get('space-0.5'),
                '!space-y-1' => $attributes->get('space-1'),
            ])>
                {!! $code !!}
            </x-torchlight-code></pre>

            @if (!$noCopy)
                <x-copy-button />
            @endif
        </div>
    </div>
</div>
