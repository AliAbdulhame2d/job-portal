<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

<body>
    <!--Main Container-->
    <div class="h-screen flex flex-col bg-gray-100 overflow-hidden" x-data=" {open: false}" >

        <!--Header-->
        <header class="h-16 w-full flex items-center justify-between border-b border-b-gray-300">
            @isset($header)
                <div class="max-w-7xl ml-0 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            @endisset

            <button @click="open = !open" class="p-1 px-4 inline-flex items-center border border-transparent  rounded-md text-gray-500 hover:text-sky-500 focus:outline-none transition ease-in-out duration-150 md:hidden" >
                
                <div class="ms-1">
                    <svg x-show="!open" class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/></svg>
                    <svg x-show="open" class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z"/></svg>
                </div>
            </button>

        </header>
        <!--End Header-->

        <!--Main Screen Container-->
        <div class="flex flex-1 overflow-hidden">
            <aside :class="open ? 'translate-x-0' : '-translate-x-full'" class="bg-gray-100 fixed top-17 left-0 h-full w-64 pt-10 p-4 border-r border-r-gray-300 overflow-y-auto transform transition-transform duration-300 md:translate-x-0 md:static">
                <ul class="text-left">
                    <li class="hover:text-white mb-1 p-1 px-4 rounded-md {{request()->routeIs('admin.dashboard')? 'bg-sky-500 text-white' : 'hover:bg-sky-500'}}"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="hover:text-white mb-1 p-1 px-4 rounded-md {{request()->routeIs('admin.jobListings.*')? 'bg-sky-500 text-white' : 'hover:bg-sky-500'}}"><a href="{{route('admin.joblistings.index')}}">JobListings</a></li>
                    <li class="hover:text-white mb-1 p-1 px-4 rounded-md {{request()->routeIs('admin.companies.*')? 'bg-sky-500 text-white' : 'hover:bg-sky-500'}}"><a href="{{route('admin.companies.index')}}">Companies</a></li>
                    <li class="hover:text-white mb-1 p-1 px-4 rounded-md {{request()->routeIs('admin.applications.*')? 'bg-sky-500 text-white' : 'hover:bg-sky-500'}}"><a href="{{route('admin.applications.index')}}">Applications</a></li>
                   
                    <!-- Settings Dropdown -->
                    <li class="hover:bg-sky-300 mb-1 rounded-md">
                        
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="p-1 px-4 inline-flex items-center border border-transparent  rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
  
                    </li>
                </ul>
            </aside>

            <main class="flex-1 bg-white p-10 overflow-auto">
                  {{$slot}}  
            </main>
        
        </div>
        <!--End Main Screen-->

    </div>
</body>
</html>