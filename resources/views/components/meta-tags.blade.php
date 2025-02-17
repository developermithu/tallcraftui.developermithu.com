@props([
    'title',
    'description' => 'TallCraftUI - A collection of beautiful UI components for Laravel TALL stack.',
    'keywords' => 'laravel, livewire, alpine.js, tailwindcss, tall stack, ui components, livewire 3, ui library',
])

<!-- Meta Tags -->
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="author" content="developermithu">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image ?? asset('assets/img/tallcraftui-website.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta name="twitter:creator" content="@DeveloperMithu">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image ?? asset('assets/img/tallcraftui-website.png') }}">

{{-- Favicon --}}
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
<link rel="manifest" href="/site.webmanifest">
