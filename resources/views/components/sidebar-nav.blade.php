@props([
    'groups' => null,
])

@php
    $groups = $groups ?? config('navigation.sidebar', []);
@endphp

<nav {{ $attributes->class('space-y-1') }}>
    @foreach ($groups as $group)
        @if (! empty($group['title']))
            <div class="px-3 pt-5 pb-2 text-xs font-semibold tracking-wider text-gray-500 uppercase">
                {{ $group['title'] }}
            </div>
        @endif

        @foreach ($group['items'] as $item)

            @php
                [$set, $icon] = explode(':', $item['icon'], 2);
            @endphp

            @if (! empty($item['logout']))
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        type="submit"
                        data-test="logout-button"
                        class="group flex w-full items-center gap-2 rounded-lg border border-transparent px-2.5 text-left text-sm font-medium text-gray-200 hover:bg-gray-700/75 hover:text-white active:border-gray-600"
                    >
                        <span class="flex flex-none items-center text-gray-500 group-hover:text-gray-300">
                            <x-dynamic-component :component="'icons.' . $set" :name="$icon" />
                        </span>
                        <span class="grow py-2">{{ $item['label'] }}</span>
                    </button>
                </form>
            @else
                @php
                    $href = isset($item['route']) ? route($item['route']) : ($item['href'] ?? '#');
                    $active = isset($item['route']) && request()->routeIs($item['route']);
                @endphp

                <a
                    href="{{ $href }}"
                    @if (isset($item['route'])) wire:navigate @endif
                    class="group flex items-center gap-2 rounded-lg border border-transparent px-2.5 text-sm font-medium {{ $active ? 'bg-gray-700/75 text-white' : 'text-gray-200 hover:bg-gray-700/75 hover:text-white active:border-gray-600' }}"
                >
                    <span class="flex flex-none items-center {{ $active ? 'text-gray-300' : 'text-gray-500 group-hover:text-gray-300' }}">
                        <x-dynamic-component :component="'icons.' . $set" :name="$icon" />
                    </span>
                    <span class="grow py-2">{{ $item['label'] }}</span>
                    @isset($item['badge'])
                        <span class="inline-flex rounded-full border border-rose-700 bg-rose-700 px-1.5 py-0.5 text-xs leading-4 font-semibold text-rose-50">
                            {{ $item['badge'] }}
                        </span>
                    @endisset
                </a>
            @endif
        @endforeach
    @endforeach
</nav>
