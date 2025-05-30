<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @isset($metaTags)
        {{ $metaTags }}
    @endisset

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Google tag (gtag.js) -->
    @if (config('app.env') === 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RZY51979SH"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-RZY51979SH');
        </script>
    @endif

    @include('components.layouts.json-ld')
</head>

<body class="min-h-full leading-7 font-lato site-gradient" x-data="darkModeToggle()" x-init="initializeTheme()">

    <x-toast />
    
    {{-- Header --}}
    <header>
        <nav class="container flex items-center justify-between pt-6">
            <div class="flex lg:flex-1 font-inter">
                <a wire:navigate href="{{ route('home') }}" class="-m-1.5 p-1.5 flex items-center gap-x-2">
                    <span class="sr-only">Your Company</span>
                    <span
                        class="text-2xl font-semibold text-transparent bg-clip-text bg-linear-to-r to-teal-500 from-indigo-500 sm:text-3xl">TallCraftUI</span>
                </a>
            </div>

            <div class="relative flex items-center justify-end gap-1 basis-0 md:grow">
                <div class="relative z-10">
                    <label class="sr-only">Theme</label>
                    <button data-pan="toggle-theme-switch" @click="toggleDarkMode"
                        class="flex items-center justify-center w-6 h-6 p-1 xxs:w-10 xxs:h-10 xxs:p-1.5 bg-transparent rounded-full hover:bg-gray-100 dark:hover:bg-slate-700 dark:ring-inset dark:ring-white/5"
                        aria-label="Theme">
                        <x-icon name="sun" class="text-teal-500 dark:text-teal-500!" x-show="!isDarkMode" x-cloak />
                        <x-icon name="moon" class="text-teal-500 dark:text-teal-500!" x-show="isDarkMode" x-cloak />
                    </button>
                </div>

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
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <div class="py-4 text-center border-t border-gray-200 dark:border-t-gray-700 lg:py-5">
        <p class="text-gray-600">&copy; {{ date('Y') }} TallCraftUI. All rights reserved.</p>
    </div>

    <script>
        function darkModeToggle() {
            return {
                sidebarVisible: false,
                isDarkMode: false,
                initializeTheme() {
                    this.isDarkMode = localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) &&
                        window.matchMedia('(prefers-color-scheme: dark)').matches);

                    if (this.isDarkMode) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                },

                toggleDarkMode() {
                    this.isDarkMode = !this.isDarkMode;
                    localStorage.setItem('dark-mode', this.isDarkMode);

                    if (this.isDarkMode) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                }
            }
        }
    </script>
</body>

</html>
