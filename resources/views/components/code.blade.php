@props(['language' => 'blade', 'noRender' => false, 'noCopy' => false])

<div {{ $attributes->class(['space-y-3 code-container relative']) }}>
    <pre><x-torchlight-code language="{{ $language }}" class="space-y-1 code">
                {{ $slot }}
            </x-torchlight-code></pre>

    @if (!$noCopy)
        <x-copy-button class="!top-0"/>
    @endif
</div>
