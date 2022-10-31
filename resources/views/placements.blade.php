<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Placements') }}
        </h2>
    </x-slot>


    <div class="min-h-full">

        <!-- Main column -->
        <div class="lg:pl-64 flex flex-col">
            <!-- Search header -->
            <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
                <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
                <button @click="menu = true" type="button"
                        class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu-alt-1 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16"/>
                    </svg>
                </button>
                <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex-1 flex">
                        <form class="w-full flex md:ml-0" action="{{route('community.search')}}" method="GET">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/search -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input id="search" name="search"
                                       class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:text-sm"
                                       placeholder="Search" type="search">
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center">
                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button @click="profile = true" type="button"
                                        class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                         src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                </button>
                            </div>

                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            <div x-show="profile" x-cloak
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none"
                                 role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                 tabindex="-1">
                                <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="user-menu-item-0">View profile</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="user-menu-item-2">Notifications</a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="user-menu-item-3">Get desktop app</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="user-menu-item-4">Support</a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="user-menu-item-5">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="flex-1">
                <!-- Page title & actions -->
                {{--<div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
                    <div class="flex-1 min-w-0">
                        <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                            Community
                        </h1>
                    </div>
                    --}}{{--<div class="mt-4 flex sm:mt-0 sm:ml-4">
                        <button type="button"
                                class="order-1 ml-3 inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-0 sm:ml-0">
                            Share
                        </button>
                        <button type="button"
                                class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-1 sm:ml-3">
                            Create
                        </button>
                    </div>--}}{{--
                </div>--}}
                <div class="py-10">
                    <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
                        <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                            <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
                                <div class="pb-8 space-y-1">

                                    <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50" -->
                                    <a href="{{ route('community') }}"
                                       class="bg-gray-200 text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                                       aria-current="page">
                                        <!-- Heroicon name: outline/home -->
                                        <svg class="text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                        </svg>
                                        <span class="truncate">
                Home
              </span>
                                    </a>

                                    <a href="{{ route('community.popular') }}"
                                       class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <!-- Heroicon name: outline/fire -->
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                                        </svg>
                                        <span class="truncate">
                Popular
              </span>
                                    </a>

                                    <a href="{{ route('community.communities') }}"
                                       class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <!-- Heroicon name: outline/user-group -->
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        <span class="truncate">
                Communities
              </span>
                                    </a>

                                    <a href="{{ route('community.trending') }}"
                                       class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <!-- Heroicon name: outline/trending-up -->
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                        </svg>
                                        <span class="truncate">
                Trending
              </span>
                                    </a>


                                    <a href="{{ route('placements') }}"
                                       class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <!-- Heroicon name: outline/user-group -->
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        <span class="truncate">
                Placements
              </span>
                                    </a>


                                </div>
                                <div class="pt-10">
                                    <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                                       id="communities-headline">
                                        My Subjects
                                    </p>
                                    <div class="mt-3 space-y-2" aria-labelledby="communities-headline">

                                        @foreach(auth()->user()->Subject()->get() as $subject)
                                            <a href="{{ route('community.subject', $subject->id) }}"
                                               class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                <span class="truncate">
                                  {{$subject->subject}}
                                </span>
                                            </a>
                                        @endforeach

                                    </div>
                                </div>
                            </nav>
                        </div>
                        <main class="lg:col-span-9 xl:col-span-6" x-data="{look: false}"
                              @keyup.shift.enter.window="look = true" @keyup.esc.window="look = false">


                            <div x-cloak x-show="look">
                                <div class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20" role="dialog"
                                     aria-modal="true">
                                    <!--
                                      Background overlay, show/hide based on modal state.

                                      Entering: "ease-out duration-300"
                                        From: "opacity-0"
                                        To: "opacity-100"
                                      Leaving: "ease-in duration-200"
                                        From: "opacity-100"
                                        To: "opacity-0"
                                    -->
                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"
                                         aria-hidden="true"></div>

                                    <!--
                                      Command palette, show/hide based on modal state.

                                      Entering: "ease-out duration-300"
                                        From: "opacity-0 scale-95"
                                        To: "opacity-100 scale-100"
                                      Leaving: "ease-in duration-200"
                                        From: "opacity-100 scale-100"
                                        To: "opacity-0 scale-95"
                                    -->
                                    <div class="mx-auto max-w-xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
                                        <form action="{{route('community.search')}}" method="get">
                                            <div class="relative">
                                                <!-- Heroicon name: solid/search -->
                                                <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-400"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <input id="search" name="search" type="search"
                                                       class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-800 placeholder-gray-400 focus:ring-0 sm:text-sm"
                                                       placeholder="Search..." role="combobox" aria-expanded="false"
                                                       aria-controls="options">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h1 class="sr-only">Newest placements</h1>
                                <div class="overflow-hidden bg-white shadow sm:rounded-md">
                                    <ul role="list" class="divide-y divide-gray-200">
                                    @forelse($placements as $p)
                                                <li>
                                                    <a href="{{route('placement.slug', $p->slug)}}" class="block hover:bg-gray-50">
                                                        <div class="flex items-center px-4 py-4 sm:px-6">
                                                            <div class="flex min-w-0 flex-1 items-center">
                                                                <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-2 md:gap-4">
                                                                    <div>
                                                                        <p class="truncate text-sm font-medium text-indigo-600">{{$p->company}}</p>
                                                                        <p class="mt-2 flex items-center text-sm text-gray-500">
                                                                            <!-- Heroicon name: mini/envelope -->
                                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                                                            </svg>
                                                                            <span class="truncate">{{$p->role}}</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="hidden md:block">
                                                                        <div>
                                                                            <p class="text-sm text-gray-900">
                                                                                Closing
                                                                                <time datetime="2020-01-07">{{$p->closing->diffForHumans()}}</time>
                                                                            </p>
                                                                            @switch($p->open)
                                                                                @case(true)
                                                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                                                        <!-- Heroicon name: mini/check-circle -->
                                                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                                                                        </svg>
                                                                                        Applications open
                                                                                    </p>
                                                                                @break(true)
                                                                                @case(false)
                                                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" className="w-5 h-5">
                                                                                            <path fillRule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clipRule="evenodd" />
                                                                                        </svg>
                                                                                        Applications closed
                                                                                    </p>
                                                                                @break(false)
                                                                            @endswitch
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <!-- Heroicon name: mini/chevron-right -->
                                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                    @empty

                                        <!-- This example requires Tailwind CSS v2.0+ -->
                                        <button type="button"
                                                class="relative block w-full border-2 border-gray-300 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="mx-auto h-12 w-12 text-gray-400"
                                                 xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none"
                                                 viewBox="0 0 48 48" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8 14v20c0 4.418 7.163 8 16 8 1.381 0 2.721-.087 4-.252M8 14c0 4.418 7.163 8 16 8s16-3.582 16-8M8 14c0-4.418 7.163-8 16-8s16 3.582 16 8m0 0v14m0-4c0 4.418-7.163 8-16 8S8 28.418 8 24m32 10v6m0 0v6m0-6h6m-6 0h-6"/>
                                            </svg>
                                            <span class="mt-2 block text-sm font-medium text-gray-900">
                                                No active placements. Check back another day!
                                              </span>
                                        </button>

                                    @endforelse

                                    <!-- More questions... -->
                                </ul>
                            </div>

                        </main>
                        <aside class="hidden xl:block xl:col-span-4">
                            <div class="sticky top-4 space-y-4">
                                <section aria-labelledby="who-to-follow-heading">
                                    <div class="bg-white rounded-lg shadow">
                                        <div class="p-6">
                                            <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">
                                                Open applications
                                            </h2>

                                            <div>
                                                <div class="mt-6 flow-root">
                                                    <ul role="list" class="-my-5 divide-y divide-gray-200">
                                                        @forelse($applications as $a)
                                                        <li class="py-4">
                                                            <div class="flex items-center space-x-4">
                                                                <div class="min-w-0 flex-1">
                                                                    <p class="truncate text-sm font-medium text-gray-900">{{$a->Placement->role}}</p>
                                                                    <p class="truncate text-sm text-gray-500">{{\Illuminate\Support\Str::title($a->status)}}</p>
                                                                </div>
                                                                <div>
                                                                    <a href="{{route('application.id', $a->id)}}" class="inline-flex items-center rounded-full border border-gray-300 bg-white px-2.5 py-0.5 text-sm font-medium leading-5 text-gray-700 shadow-sm hover:bg-gray-50">View</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @empty
                                                            <p>No active applications</p>

                                                        @endforelse()
                                                    </ul>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="{{route('applications')}}" class="flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">Manage my applications</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </section>
                                <section aria-labelledby="trending-heading">
                                    <div class="bg-white rounded-lg shadow">
                                        <div class="pl-5 pr-5 pt-2">
                                            <div class="flex w-full items-center justify-between space-x-6 mt-2">
                                                <div class="flex-1 truncate">
                                                    <div class="flex items-center space-x-3">
                                                        <h3 class="truncate text-sm font-medium text-gray-900">Jane Cooper</h3>
                                                    </div>
                                                    <p class="mt-1 truncate text-sm text-gray-500">Work placement contact</p>
                                                </div>
                                                <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div>
                                            <div>
                                                <div class="-mt-px flex divide-x divide-gray-200">
                                                    <div class="flex w-0 flex-1">
                                                        <a href="mailto:janecooper@example.com" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center rounded-bl-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                                                            <!-- Heroicon name: mini/envelope -->
                                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                                            </svg>
                                                            <span class="ml-3">Email</span>
                                                        </a>
                                                    </div>
                                                    <div class="-ml-px flex w-0 flex-1">
                                                        <a href="{{route('ticket.new')}}" class="relative inline-flex w-0 flex-1 items-center justify-center rounded-br-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                                                            <!-- Heroicon name: mini/phone -->
                                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                                            </svg>
                                                            <span class="ml-3">Open Ticket</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </aside>
                    </div>


                </div>
            </main>
        </div>
    </div>

</x-app-layout>
