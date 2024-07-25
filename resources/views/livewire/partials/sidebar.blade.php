<div class="hidden lg:relative lg:block lg:flex-none">
    <div
        class="sticky top-[4.75rem] -ml-0.5 h-[calc(100vh-4.75rem)] w-64 overflow-y-auto custom-scrollbar overflow-x-hidden py-16 pl-0.5 pr-8 xl:w-72 xl:pr-16">
        <nav class="text-base lg:text-sm">
            <ul role="list" class="space-y-9">
                <x-sidebar-menu title="Getting">
                    <x-sidebar-menu.item title="Installation" :href="route('docs.installation')" />
                    <x-sidebar-menu.item title="Customizing" :href="route('docs.customizing')" />
                </x-sidebar-menu>
                
                <x-sidebar-menu title="Form Components">
                    <x-sidebar-menu.item title="input" :href="route('docs.components.input')" />
                    <x-sidebar-menu.item title="textarea" :href="route('docs.components.textarea')" />
                    <x-sidebar-menu.item title="radio" :href="route('docs.components.radio')" />
                    <x-sidebar-menu.item title="checkbox" :href="route('docs.components.checkbox')" />
                    <x-sidebar-menu.item title="select" :href="route('docs.components.select')" />
                </x-sidebar-menu>

                <x-sidebar-menu title="UI Components">
                    <x-sidebar-menu.item title="alert" :href="route('docs.components.alert')" />
                    <x-sidebar-menu.item title="button" :href="route('docs.components.button')" />
                    <x-sidebar-menu.item title="breadcrumb" :href="route('docs.components.breadcrumb')" />
                    <x-sidebar-menu.item title="dropdown" :href="route('docs.components.dropdown')" />
                    <x-sidebar-menu.item title="modal" :href="route('docs.components.modal')" />
                    <x-sidebar-menu.item title="icon" :href="route('docs.components.icon')" />
                </x-sidebar-menu>

                <x-sidebar-menu title="Contributing">
                    <x-sidebar-menu.item title="how to contribute" href="https://github.com/developermithu/tallcraftui" external />
                </x-sidebar-menu>
            </ul>
        </nav>
    </div>
</div>
