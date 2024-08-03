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

        <div class="relative flex items-center flex-grow basis-0">
            <a aria-label="Home page" href="{{ route('home') }}" wire:navigate>
                <span
                    class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r to-teal-500 from-indigo-500 sm:text-3xl">
                    TallCraftUI
                </span>
            </a>
        </div>

        {{-- Search --}}
        {{-- <div class="mr-6 -my-5 sm:mr-8 md:mr-0">
        <button type="button"
            class="group flex h-6 w-6 items-center justify-center sm:justify-start md:h-auto md:w-80 md:flex-none md:rounded-lg md:py-2.5 md:pl-4 md:pr-3.5 md:text-sm md:ring-1 md:ring-slate-200 md:hover:ring-slate-300 lg:w-96 dark:md:bg-slate-800/75 dark:md:ring-inset dark:md:ring-white/5 dark:md:hover:bg-slate-700/40 dark:md:hover:ring-slate-500">
            <svg aria-hidden="true" viewBox="0 0 20 20"
                class="flex-none w-5 h-5 fill-slate-400 group-hover:fill-slate-500 md:group-hover:fill-slate-400 dark:fill-slate-500">
                <path
                    d="M16.293 17.707a1 1 0 0 0 1.414-1.414l-1.414 1.414ZM9 14a5 5 0 0 1-5-5H2a7 7 0 0 0 7 7v-2ZM4 9a5 5 0 0 1 5-5V2a7 7 0 0 0-7 7h2Zm5-5a5 5 0 0 1 5 5h2a7 7 0 0 0-7-7v2Zm8.707 12.293-3.757-3.757-1.414 1.414 3.757 3.757 1.414-1.414ZM14 9a4.98 4.98 0 0 1-1.464 3.536l1.414 1.414A6.98 6.98 0 0 0 16 9h-2Zm-1.464 3.536A4.98 4.98 0 0 1 9 14v2a6.98 6.98 0 0 0 4.95-2.05l-1.414-1.414Z">
                </path>
            </svg><span class="sr-only md:not-sr-only md:ml-2 md:text-slate-500 md:dark:text-slate-400">Search
                docs</span><kbd class="hidden ml-auto font-medium text-slate-400 md:block dark:text-slate-500"><kbd
                    class="font-sans">Ctrl </kbd><kbd class="font-sans">K</kbd></kbd>
        </button>
    </div> --}}

        <div class="relative flex items-center justify-end gap-1 basis-0 md:flex-grow">
            <div class="relative z-10">
                <label class="sr-only">Theme</label>
                <button @click="toggleDarkMode"
                    class="flex items-center justify-center w-10 h-10 p-1.5 bg-transparent rounded-full hover:bg-gray-100 dark:hover:bg-slate-700 dark:ring-inset dark:ring-white/5"
                    aria-label="Theme">
                    <x-icon name="sun" class="text-teal-500 dark:!text-teal-500" x-show="!isDarkMode" x-cloak />
                    <x-icon name="moon" class="text-teal-500 dark:!text-teal-500" x-show="isDarkMode" x-cloak />
                </button>
            </div>

            <a aria-label="GitHub" href="https://github.com/developermithu/tallcraftui" target="_blank"
                class="flex items-center justify-center w-10 h-10 p-1.5 bg-transparent rounded-full group hover:bg-gray-100 dark:hover:bg-slate-700 dark:ring-inset dark:ring-white/5">
                <svg aria-hidden="true" viewBox="0 0 16 16"
                    class="w-5 h-5 fill-slate-400 group-hover:fill-slate-500 dark:group-hover:fill-slate-300">
                    <path
                        d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</header>
