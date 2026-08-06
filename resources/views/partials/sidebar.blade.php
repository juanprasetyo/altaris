<nav
    x-bind:class="{
        '-translate-x-full': !mobileSidebarOpen,
        'translate-x-0': mobileSidebarOpen,
        'lg:-translate-x-full': !desktopSidebarOpen,
        'lg:translate-x-0': desktopSidebarOpen,
    }"
    id="page-sidebar"
    class="fixed top-0 bottom-0 left-0 z-50 flex h-full w-full -translate-x-full flex-col border-r border-gray-800 bg-gray-800 text-gray-200 transition-transform duration-500 ease-out lg:w-64 lg:translate-x-0"
    aria-label="Main Sidebar Navigation"
>
    <!-- Sidebar Header -->
    <div class="flex h-16 w-full flex-none items-center justify-between bg-gray-600/25 px-4 lg:justify-center">
        <a
            href="{{ route('dashboard') }}"
            wire:navigate
            class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-100 hover:text-gray-300"
        >
            <x-app-logo-icon class="size-5 fill-current text-rose-400 transition group-hover:scale-110" />
            <span>{{ config('app.name', 'Laravel') }}</span>
        </a>

        <!-- Close Sidebar on Mobile -->
        <div class="lg:hidden">
            <button
                x-on:click="mobileSidebarOpen = false"
                type="button"
                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-700 bg-gray-800 px-3 py-2 text-sm leading-5 font-semibold text-gray-300 hover:border-gray-600 hover:text-gray-200 hover:shadow-xs focus:ring-3 focus:ring-gray-600/40 active:border-gray-700 active:shadow-none"
            >
                <svg class="-mx-0.5 inline-block size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Sidebar Navigation -->
    <div class="overflow-y-auto">
        <div class="w-full p-4">
            <x-sidebar-nav />
        </div>
    </div>
</nav>
