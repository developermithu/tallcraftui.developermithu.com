@props(['title', 'description' => null, 'keywords' => null, 'image' => null])

<!-- Meta Tags -->
<meta name="description" content="{{ $description ?? 'TallCraftUI offers beautifully crafted UI components for the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).' }}">
<meta name="keywords"
    content="{{ $keywords ?? 'TallCraftUI, TALL stack, Tailwind CSS, Alpine.js, Laravel, Livewire, UI components, blade components, ui library, livewire 3 components' }}">
<meta name="author" content="developermithu">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description ?? 'TallCraftUI offers beautifully crafted UI components for the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).' }}">
<meta property="og:image" content="{{ $image ?? asset('tallcraftui.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta name="twitter:creator" content="@DeveloperMithu">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description ?? 'TallCraftUI offers beautifully crafted UI components for the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).' }}">
<meta name="twitter:image" content="{{ $image ?? asset('tallcraftui.png') }}">
