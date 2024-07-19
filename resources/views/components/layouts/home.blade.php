<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="min-h-full leading-7 bg-no-repeat text-slate-900 font-lato bg-gradient-to-tl from-white via-white to-teal-100/30 dark:bg-slate-900 dark:from-slate-900 dark:via-slate-900 dark:to-teal-600/10 dark:text-slate-400">
    
    {{-- Header --}}
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="container flex items-center justify-between pt-6">
            <div class="flex lg:flex-1">
                <a wire:navigate href="{{ route('home') }}" class="-m-1.5 p-1.5 flex items-center gap-x-2">
                    <span class="sr-only">Your Company</span>
                    <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">

                    <span
                        class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r to-teal-500 from-indigo-500 sm:text-3xl">TallCraftUI</span>
                </a>
            </div>

            {{-- Login Button --}}
            <div class="flex justify-end flex-1">
                <a href="https://github.com/developermithu/tallcraftui" target="_blank"
                    class="text-sm font-semibold leading-6 text-gray-700 dark:text-gray-300">Github</a>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
