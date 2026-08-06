<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sidebar Navigation
    |--------------------------------------------------------------------------
    |
    | Each entry is a navigation group. A group with a null "title" renders
    | as a flat, ungrouped list of items. A group with a "title" renders as
    | a labeled section containing its items.
    |
    | Item keys:
    |   label   - display text (required)
    |   icon    - icon name resolved by <x-icon> (required)
    |   route   - a named route; used for the href and for active-state
    |              detection via request()->routeIs()
    |   href    - a raw URL, used when no named route exists (ignored if
    |              "route" is present)
    |   badge   - optional count/label rendered as a pill
    |   logout  - when true, renders a CSRF-protected logout form instead
    |              of a link (route/href/badge are ignored)
    |
    */

    'sidebar' => [

        [
            'title' => null,
            'items' => [
                [
                    'label' => 'Dashboard',
                    'icon' => 'lucide:house',
                    'route' => 'dashboard',
                ],
            ],
        ],

        [
            'title' => 'Account',
            'items' => [
                [
                    'label' => 'Profile',
                    'icon' => 'lucide:circle-user',
                    'route' => 'profile.edit',
                ],
                [
                    'label' => 'Log out',
                    'icon' => 'lucide:log-out',
                    'logout' => true,
                ],
            ],
        ],

    ],

];
