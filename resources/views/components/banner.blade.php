<div x-data="{
    bannerVisible: true,
    bannerVisibleAfter: 300,
}" x-show="bannerVisible" x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="-translate-y-10" x-transition:enter-end="translate-y-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0"
    x-transition:leave-end="-translate-y-10" x-init="setTimeout(() => { bannerVisible = true }, bannerVisibleAfter);"
    class="w-full py-3 text-white duration-500 bg-gradient-to-r from-pink-600 to-teal-600 lg:shadow-md lg:rounded" x-cloak
    data-pan="discord-button">
    <div class="flex items-center justify-center gap-10 px-6">
        {{-- V2 Banner --}}
        <a href="https://tallcraftui.developermithu.com" class="flex items-center gap-2 text-sm text-white">
            <x-icon name="gift" />
            <strong class="font-semibold">TallCraftUI 
                <span class="text-amber-400">v2</span>
                is out now
            </strong>
            <span class="hidden w-2 mt-0.5 h-px bg-gray-100 xxs:block"></span>
            <span class="hidden xxs:inline-block"> check it! </span>
        </a>
    </div>
</div>
