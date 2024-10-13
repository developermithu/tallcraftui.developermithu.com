@props(['language' => 'blade', 'noRender' => false, 'noCopy' => false])

<div {{ $attributes->class(['space-y-3 code-container relative']) }}>
    <pre><x-torchlight-code language="{{ $language }}" 
        @class([
            'space-y-1 code',
            '!space-y-0' => $attributes->get('space-none'),
            '!space-y-0.5' => $attributes->get('space-0.5'),
            '!space-y-1' => $attributes->get('space-1'),
        ])
        >
                {{ $slot }}
            </x-torchlight-code></pre>

    @if (!$noCopy)
        <x-copy-button class="!top-0" />
    @endif
</div>
