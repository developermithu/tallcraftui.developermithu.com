<div class="block lg:hidden">
    <x-banner />
</div>

<header x-data="{ isSticky: false }" class="sticky top-0 z-50 px-4 py-5 transition duration-200 sm:px-6 lg:px-8"
    x-on:scroll.window="isSticky = window.scrollY > 60"
    :class="{ 'bg-white dark:bg-slate-900': isSticky, 'bg-transparent': !isSticky }">
    <div class="container flex flex-wrap items-center justify-between">
        <div class="flex mr-6 lg:hidden">
            <button x-on:click="sidebarVisible = true" x-on:click.outside="sidebarVisible = false" type="button"
                class="relative" aria-label="Open navigation">
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                    class="w-6 h-6 stroke-slate-500">
                    <path d="M4 7h16M4 12h16M4 17h16"></path>
                </svg>
            </button>
        </div>

        <div class="relative flex items-center flex-grow font-inter basis-0">
            <a aria-label="Home page" href="{{ route('home') }}" wire:navigate>
                <span
                    class="text-2xl font-semibold text-transparent bg-clip-text bg-gradient-to-r to-teal-500 from-indigo-500 sm:text-3xl">
                    TallCraftUI
                </span>
            </a>
        </div>

        <div class="hidden lg:block">
            <x-banner />
        </div>

        <div class="relative flex items-center justify-end gap-1 basis-0 md:flex-grow">
            {{-- Algolia Docsearch --}}
            <div id="docsearch"></div>

            {{-- Theme Switch --}}
            <div class="relative z-10">
                <x-tooltip text="Switch theme" bottom no-transition>
                    <label class="sr-only">Theme</label>
                    <button data-pan="toggle-theme-switch" @click="toggleDarkMode"
                        class="flex items-center justify-center w-6 h-6 p-1 xxs:w-10 xxs:h-10 xxs:p-1.5 bg-transparent rounded-full hover:bg-gray-100 dark:hover:bg-slate-700 dark:ring-inset dark:ring-white/5"
                        aria-label="Theme">
                        <x-icon name="sun" class="text-teal-500 dark:!text-teal-500" x-show="!isDarkMode" x-cloak />
                        <x-icon name="moon" class="text-teal-500 dark:!text-teal-500" x-show="isDarkMode" x-cloak />
                    </button>
                </x-tooltip>
            </div>

            {{-- Github Button --}}
            <x-tooltip text="Star us on GitHub" bottom no-transition>
                <a data-pan="github-link" aria-label="GitHub" href="https://github.com/developermithu/tallcraftui"
                    target="_blank"
                    class="flex items-center justify-center w-6 h-6 p-1 xxs:w-10 xxs:h-10 xxs:p-1.5 bg-transparent rounded-full group hover:bg-gray-100 dark:hover:bg-slate-700 dark:ring-inset dark:ring-white/5">
                    <svg aria-hidden="true" viewBox="0 0 16 16"
                        class="w-5 h-5 fill-slate-400 group-hover:fill-slate-500 dark:group-hover:fill-slate-300">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z">
                        </path>
                    </svg>
                </a>
            </x-tooltip>

            {{-- Discord Button --}}
            <x-tooltip text="Join Discord Community" bottom no-transition>
                <a data-pan="discord-link" aria-label="Discord" href="https://discord.gg/gmFTB9YRV6" target="_blank"
                    class="flex items-center justify-center w-6 h-6 p-1 xxs:w-10 xxs:h-10 xxs:p-1.5 bg-transparent rounded-full group hover:bg-gray-100 dark:hover:bg-slate-700 dark:ring-inset dark:ring-white/5">
                    <svg class="w-5 h-5 fill-slate-400 group-hover:fill-slate-500 dark:group-hover:fill-slate-300"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z" />
                    </svg>
                </a>
            </x-tooltip>
        </div>
    </div>
</header>
