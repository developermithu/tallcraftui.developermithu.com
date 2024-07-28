<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'dark': isDarkMode }" x-init="initializeTheme()">

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
</head>

<body
    class="flex min-h-full leading-7 bg-no-repeat text-slate-900 font-lato bg-gradient-to-tl from-white via-white to-teal-100/30 dark:bg-slate-900 dark:from-slate-900 dark:via-slate-900 dark:to-teal-600/10 dark:text-slate-400"
    x-data="darkModeToggle()">
    <div class="container flex flex-col">
        <x-partials.header />

        <div class="relative flex justify-center flex-auto w-full mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
            {{-- Left Sidebar --}}
            @livewire('partials.sidebar')

            <main class="flex-auto max-w-2xl min-w-0 px-4 py-16 lg:max-w-none lg:pl-8 lg:pr-0 xl:px-16">
                @isset($content)
                    <article>
                        {{ $content }}
                    </article>
                @else
                    <article> {{ $slot }} </article>
                @endisset

                @isset($prevNext)
                    <dl class="flex pt-6 mt-12 border-t border-slate-200 dark:border-slate-800">
                        <div>
                            <dt class="text-sm font-medium font-display text-slate-900 dark:text-white">
                                Previous
                            </dt>
                            <dd class="mt-1">
                                <a class="flex flex-row-reverse items-center text-base font-semibold gap-x-1 text-slate-500 hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300"
                                    href="/">Getting started<svg viewBox="0 0 16 16" aria-hidden="true"
                                        class="flex-none w-4 h-4 fill-current -scale-x-100">
                                        <path
                                            d="m9.182 13.423-1.17-1.16 3.505-3.505H3V7.065h8.517l-3.506-3.5L9.181 2.4l5.512 5.511-5.511 5.512Z">
                                        </path>
                                    </svg></a>
                            </dd>
                        </div>
                        <div class="ml-auto text-right">
                            <dt class="text-sm font-medium font-display text-slate-900 dark:text-white">
                                Next
                            </dt>
                            <dd class="mt-1">
                                <a class="flex items-center text-base font-semibold gap-x-1 text-slate-500 hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300"
                                    href="/docs/understanding-caching">Understanding caching<svg viewBox="0 0 16 16"
                                        aria-hidden="true" class="flex-none w-4 h-4 fill-current">
                                        <path
                                            d="m9.182 13.423-1.17-1.16 3.505-3.505H3V7.065h8.517l-3.506-3.5L9.181 2.4l5.512 5.511-5.511 5.512Z">
                                        </path>
                                    </svg></a>
                            </dd>
                        </div>
                    </dl>
                @endisset
            </main>

            @isset($aside)
                {{ $aside }}
            @endisset
        </div>
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
