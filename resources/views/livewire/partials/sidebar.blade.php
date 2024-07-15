<div class="hidden lg:relative lg:block lg:flex-none">
    <div
        class="sticky top-[4.75rem] -ml-0.5 h-[calc(100vh-4.75rem)] w-64 overflow-y-auto custom-scrollbar overflow-x-hidden py-16 pl-0.5 pr-8 xl:w-72 xl:pr-16">
        <nav class="text-base lg:text-sm">
            <ul role="list" class="space-y-9">
                <li>
                    <h2 class="text-base font-medium" style="word-spacing: 5px">
                        Getting Started
                    </h2>

                    <ul role="list"
                        class="mt-2 space-y-2 border-l-2 border-slate-100 lg:mt-4 lg:space-y-4 lg:border-slate-200 dark:border-slate-800">
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full  hover:before:block {{ request()->routeIs('docs.installation') ? 'font-semibold text-teal-500 dark:text-teal-500 before:bg-teal-500 dark:before:bg-teal-600 before:block' : 'text-slate-500 dark:text-slate-400 before:bg-slate-300 before:hidden hover:text-slate-600 dark:hover:text-slate-300 dark:before:bg-slate-600' }}"
                                href="{{ route('docs.installation') }}">Installation</a>
                        </li>

                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full  hover:before:block {{ request()->routeIs('docs.customizing') ? 'font-semibold text-teal-500 dark:text-teal-500 before:bg-teal-500 dark:before:bg-teal-600 before:block' : 'text-slate-500 dark:text-slate-400 before:bg-slate-300 before:hidden hover:text-slate-600 dark:hover:text-slate-300 dark:before:bg-slate-600' }}"
                                href="{{ route('docs.customizing') }}">Customizing</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <h2 class="text-base font-medium" style="word-spacing: 5px" style="word-spacing: 5px">
                        Form Components
                    </h2>

                    <ul role="list"
                        class="mt-2 space-y-2 border-l-2 border-slate-100 lg:mt-4 lg:space-y-4 lg:border-slate-200 dark:border-slate-800">
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/understanding-caching">Input</a>
                        </li>
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/predicting-user-behavior">Textarea</a>
                        </li>
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/basics-of-time-travel">Select</a>
                        </li>
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/introduction-to-string-theory">Checkbox</a>
                        </li>
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/the-butterfly-effect">Radio</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <h2 class="text-base font-medium" style="word-spacing: 5px">
                        UI Components
                    </h2>
                    <ul role="list"
                        class="mt-2 space-y-2 border-l-2 border-slate-100 lg:mt-4 lg:space-y-4 lg:border-slate-200 dark:border-slate-800">
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/writing-plugins">Alert</a>
                        </li>
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/neuralink-integration">Button</a>
                        </li>
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/temporal-paradoxes">Icon</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <h2 class="text-base font-medium" style="word-spacing: 5px">
                        Contributing
                    </h2>

                    <ul role="list"
                        class="mt-2 space-y-2 border-l-2 border-slate-100 lg:mt-4 lg:space-y-4 lg:border-slate-200 dark:border-slate-800">
                        <li class="relative leading-6">
                            <a wire:navigate
                                class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                href="/docs/how-to-contribute">How to contribute</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
