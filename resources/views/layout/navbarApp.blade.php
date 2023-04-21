<nav class="shadow" x-data="{ menuOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" x-on:click="menuOpen = ! menuOpen"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-shrink-0 items-center">
                    <a href="/dashboard">
                        <img class="block h-8 w-auto lg:hidden" src="/assets/img/logoipsum-264.svg" alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block" src="/assets/img/logoipsum-264.svg" alt="Your Company">
                    </a>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">

                    @if (Auth::user()->profile->profile_type == 'admin')
                        <a href="/admin/employers"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Employer</a>
                        <a href="/admin/campaigns"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Campaign</a>
                        <a href="/admin/concierge"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Concierge</a>
                        <a href="/admin/contents"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Content</a>
                        <a href="/admin/users"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">User</a>
                    @elseif (Auth::user()->profile->profile_type == 'employer')
                        <a href="/challenges"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Challenge</a>
                        <a href="/guides"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Guide</a>
                        {{-- <a href="/campaigns"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Campaign</a>
                        <a href="/contents"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Content</a> --}}
                    @elseif (Auth::user()->profile->profile_type == 'jobseeker')
                        {{-- <a href="/contents"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Content</a> --}}
                    @elseif (Auth::user()->profile->profile_type == 'manager')
                        <a href="/staff/employers"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Employer</a>
                        <a href="/staff/campaigns"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Campaign</a>
                        <a href="/staff/concierge"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Concierge</a>
                        <a href="/staff/contents"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Content</a>
                    @endif


                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-shrink-0">


                    @if (Auth::user()->profile->profile_type == 'admin')
                    @elseif (Auth::user()->profile->profile_type == 'employer')
                        {{-- <a href="/concierge">
                            <button type="button"
                                class="relative inline-flex items-center gap-x-1.5 rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                                Concierge
                            </button>
                        </a> --}}
                    @elseif (Auth::user()->profile->profile_type == 'jobseeker')
                        <a href="/challenges/explore">
                            <button type="button"
                                class="relative inline-flex items-center gap-x-1.5 rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                                Explore
                            </button>
                        </a>
                    @elseif (Auth::user()->profile->profile_type == 'manager')
                    @endif


                </div>
                <div class="hidden md:ml-4 md:flex md:flex-shrink-0 md:items-center">

                    <div class="relative ml-3" x-data="{ profileOpen: false }">
                        <div>
                            <button type="button" x-on:click="profileOpen = ! profileOpen"
                                class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>

                        <div x-show="profileOpen"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <div class="py-3 px-3">
                                <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                            </div>

                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Profile</a>
                            @if (Auth::user()->profile->profile_type == 'employer')
                                <a href="/billing" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-1">Billing</a>
                            @elseif (Auth::user()->profile->profile_type == 'jobseekerererererer')
                                <a href="/wallet" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-1">Wallet</a>
                            @endif
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-2">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 pb-3 pt-2">


            @if (Auth::user()->profile->profile_type == 'admin')
            @elseif (Auth::user()->profile->profile_type == 'employer')

            @elseif (Auth::user()->profile->profile_type == 'jobseeker')

            @elseif (Auth::user()->profile->profile_type == 'manager')
            @endif
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            {{-- <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Dashboard</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Team</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Projects</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Calendar</a> --}}
        </div>
        <div class="border-t border-gray-200 pb-3 pt-4" x-show="menuOpen">
            <div class="flex items-center px-4 sm:px-6">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="/profile"
                    class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">
                    Profile</a>


                @if (Auth::user()->profile->profile_type == 'admin')
                @elseif (Auth::user()->profile->profile_type == 'employer')
                    <a href="/billing"
                        class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">Billing</a>
                @elseif (Auth::user()->profile->profile_type == 'jobseeker')
                    <a href="/wallet"
                        class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">Wallet</a>
                @elseif (Auth::user()->profile->profile_type == 'manager')
                @endif
                <form action="/logout" method="POST">
                    @csrf
                    <button
                        class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">Sign
                        out</button>
                </form>
            </div>
        </div>
    </div>
</nav>


<script></script>
