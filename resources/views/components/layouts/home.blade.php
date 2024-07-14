<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="flex min-h-full leading-7 bg-no-repeat text-slate-900 font-lato bg-gradient-to-tl from-white via-white to-teal-100/30 dark:bg-slate-900 dark:from-slate-900 dark:via-slate-900 dark:to-teal-600/10 dark:text-slate-400">
    <div class="container flex flex-col">
        {{ $slot }}
    </div>
</body>

</html>
