@props(['title', 'subtitle' => '', 'description' => null])

<header class="space-y-1 mb-9">
    <p class="text-sm font-medium text-teal-500 font-display"> {{ $subtitle }} </p>

    <h1> {{ $title }} </h1>

    @if($description)
        <div>
            <p class="py-5"> {{ $description }} </p>
            <hr class="border-0 h-[1px] bg-teal-900/10 dark:bg-teal-500/20" />
        </div>
    @endif

    {{-- <x-hostinger-promo class="relative block mt-4! lg:hidden" /> --}}
</header>
