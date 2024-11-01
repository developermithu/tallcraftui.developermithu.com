@use('Illuminate\Support\Facades\Cache')
@use('Illuminate\Support\Facades\Http')

{{-- @php
    $latestRelease = Cache::remember('latest_release', 3600, function () {
        return Http::get('https://api.github.com/repos/developermithu/tallcraftui/releases/latest')->json();
    });

    $tag = $latestRelease['tag_name'] ?? null;
    $url = $latestRelease['html_url'] ?? null;
@endphp --}}

<div x-data="{
    bannerVisible: true,
    bannerVisibleAfter: 300,
}" x-show="bannerVisible" x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="-translate-y-10" x-transition:enter-end="translate-y-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0"
    x-transition:leave-end="-translate-y-10" x-init="setTimeout(() => { bannerVisible = true }, bannerVisibleAfter);"
    class="py-3 text-white duration-500 lg:shadow-md lg:rounded bg-gradient-to-r from-purple-600 to-indigo-500 hover:from-indigo-600 hover:to-teal-500"
    x-cloak data-pan="banner">
    <div class="flex items-center justify-center gap-10 px-6 lg:justify-between">
        {{-- <a target="_blank" href="{{ $url }}" class="flex items-center gap-2 text-sm text-white">
            <x-icon name="gift" />
            <strong class="font-semibold">TallCraftUI {{ $tag }} is here</strong>
            <span class="hidden w-2 mt-0.5 h-px bg-gray-100 xxs:block"></span>
            <span class="hidden xxs:inline-block"> see what’s new! </span>
        </a> --}}

        <a target="_blank" href="https://discord.gg/kUbx8xte"
            class="flex items-center gap-2 text-sm text-white xs:text-base">
            <strong class="font-semibold">Join our Discord community 🚀</strong>
        </a>
    </div>
</div>
