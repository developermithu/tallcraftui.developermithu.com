<div 
    class="lg:relative lg:block lg:flex-none"
    :class="{ 'fixed inset-0 z-[99] h-screen bg-white dark:bg-slate-900 w-fit pl-6 shadow': sidebarVisible, 'hidden': !sidebarVisible }"
    >
    <div class="sticky -ml-0.5 h-[calc(100vh-4.75rem)] w-56 xxs:w-64 overflow-y-auto custom-scrollbar overflow-x-hidden py-16 pl-0.5 pr-8 xl:w-72 xl:pr-16"
        :class="{ '': sidebarVisible, 'top-[4.75rem]': !sidebarVisible }">
        <nav class="text-base lg:text-sm">
            <ul role="list" class="space-y-9">
                <x-sidebar-menu title="Getting Started">
                    <x-sidebar-menu.item title="Installation" :href="route('docs.installation')" />
                    <x-sidebar-menu.item title="Configuration" :href="route('docs.configuration')" />
                </x-sidebar-menu>

                <x-sidebar-menu title="Form Components" count="6" >
                    <x-sidebar-menu.item title="input" :href="route('docs.components.input')" />
                    <x-sidebar-menu.item title="textarea" :href="route('docs.components.textarea')" />
                    <x-sidebar-menu.item title="radio" :href="route('docs.components.radio')" />
                    <x-sidebar-menu.item title="checkbox" :href="route('docs.components.checkbox')" />
                    <x-sidebar-menu.item title="toggle" :href="route('docs.components.toggle')" />
                    <x-sidebar-menu.item title="select" :href="route('docs.components.select')" />
                </x-sidebar-menu>

                <x-sidebar-menu title="UI Components" count="9" >
                    <x-sidebar-menu.item title="alert" :href="route('docs.components.alert')" />
                    <x-sidebar-menu.item title="badge" :href="route('docs.components.badge')" />
                    <x-sidebar-menu.item title="button" :href="route('docs.components.button')" />
                    <x-sidebar-menu.item title="breadcrumb" :href="route('docs.components.breadcrumb')" />
                    <x-sidebar-menu.item title="dropdown" :href="route('docs.components.dropdown')" />
                    <x-sidebar-menu.item title="menu" :href="route('docs.components.menu')" new />
                    <x-sidebar-menu.item title="modal" :href="route('docs.components.modal')" />
                    <x-sidebar-menu.item title="icon" :href="route('docs.components.icon')" />
                    <x-sidebar-menu.item title="stat" :href="route('docs.components.stat')" new />
                </x-sidebar-menu>

                <x-sidebar-menu title="Contributing">
                    <x-sidebar-menu.item title="how to contribute" :href="route('docs.contribution')" />
                </x-sidebar-menu>
            </ul>
        </nav>
    </div>
</div>
