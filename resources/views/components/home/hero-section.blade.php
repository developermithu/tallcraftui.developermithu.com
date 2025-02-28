<aside class="col-span-full lg:col-span-5">
    <h1 class="mb-4 text-4xl font-bold sm:text-5xl">A TALL Stack UI Library</h1>
    <h4 class="mb-6 text-lg text-gray-600 dark:text-gray-300 sm:text-xl">
        TallCraftUI is a Laravel blade UI components library for the TALL Stack (TailwindCSS, Alpine.js,
        Laravel, Livewire) projects, offering <span class="border-b-2 pb-0.5 border-primary">25+ beautifully
            crafted</span>, customizable components.
    </h4>

    <div class="flex flex-col items-center gap-y-4 gap-x-5 sm:flex-row">
        <x-button data-pan="get-started-button" :link="route('docs.installation')" label="Get Started"
            class="w-full py-3 sm:w-fit sm:py-2.5" />
        <x-button data-pan="view-github-button" external
            link="https://github.com/developermithu/tallcraftui" outline
            class="w-full py-3 sm:w-fit sm:py-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="size-4">
                <path
                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                <path d="M9 18c-4.51 2-5-2-7-2" />
            </svg>
            View on GitHub
        </x-button>
    </div>

    <div class="space-y-5 md:space-y-6 mt-14">
        <x-home.form-section />
        <x-home.alert-section />
        <x-home.progress-section />
        <x-home.avatar-section />
        <x-home.breadcrumb-section />
    </div>
</aside>