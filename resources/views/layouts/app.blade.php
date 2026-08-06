<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 dark:text-gray-100">
        <div
            x-data="{ mobileSidebarOpen: false, desktopSidebarOpen: true }"
            x-bind:class="{ 'lg:pl-64': desktopSidebarOpen }"
            id="page-container"
            class="mx-auto flex min-h-dvh w-full min-w-80 flex-col lg:pl-64"
        >
            @include('partials.sidebar')

            @include('partials.header')

            <!-- Page Content -->
            <main id="page-content" class="flex max-w-full flex-auto flex-col pt-16">
                <div class="mx-auto w-full max-w-10xl p-4 lg:p-8">
                    {{ $slot }}
                </div>
            </main>

            <!-- Page Footer -->
            @include('partials.footer')
            <!-- END Page Footer -->
            <!-- Page Footer -->
        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
