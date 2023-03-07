@push('css')
{{--    @vite('resources/css/header.css')--}}
    <style>
        h1 {color: red;}
    </style>
@endpush

<div class="header">
    <h1 class="header_logo">Mindful Wishlist</h1>
    <div>
        @auth
            <div class="dropdown" id="btn">
                <p class="dropdown_text">{{ Auth::user()->name }}</p>
                <i class="fa-solid fa-chevron-down dropdown_icon" id="arrow_icon"></i>
            </div>
            <div class="dropdown_links" id="dropdown_links">
                <a href="{{route('profile.edit')}}" class="dropdown_link">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}"
                       class="dropdown_link"
                       onclick="event.preventDefault();
                                this.closest('form').submit();
                                "
                    >Log Out</a>
                </form>
            </div>

{{--            <div class="hidden sm:flex sm:items-center sm:ml-6">--}}
{{--                <x-dropdown align="right" width="48">--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">--}}
{{--                            <div>{{ Auth::user()->name }}</div>--}}

{{--                            <div class="ml-1">--}}
{{--                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
{{--                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                    </x-slot>--}}

{{--                    <x-slot name="content">--}}
{{--                        <x-dropdown-link :href="route('profile.edit')">--}}
{{--                            {{ __('Profile') }}--}}
{{--                        </x-dropdown-link>--}}

{{--                        <!-- Authentication -->--}}
{{--                        <form method="POST" action="{{ route('logout') }}">--}}
{{--                            @csrf--}}

{{--                            <x-dropdown-link :href="route('logout')"--}}
{{--                                             onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                {{ __('Log Out') }}--}}
{{--                            </x-dropdown-link>--}}
{{--                        </form>--}}
{{--                    </x-slot>--}}
{{--                </x-dropdown>--}}
{{--            </div>--}}
        @endauth
        @guest
                <a href="{{ route('login') }}">Log in</a>
            @endguest
    </div>
</div>

