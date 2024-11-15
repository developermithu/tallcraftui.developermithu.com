<aside
    class="hidden relative xl:sticky xl:top-[4.75rem] xl:-mr-6 xl:block xl:h-[calc(100vh-4.75rem)] xl:flex-none xl:overflow-y-auto xl:py-16 xl:pr-6">
    <nav class="w-56">
        <h2 class="text-base font-medium leading-6">
            On this page
        </h2>

        <ol role="list" class="mt-4 space-y-2 text-sm">
            {{ $slot }}
        </ol>
    </nav>

    <x-hostinger-promo />
</aside>
