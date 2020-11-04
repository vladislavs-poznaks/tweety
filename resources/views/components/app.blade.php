<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="flex justify-between">
                @if(auth()->check())
                    <div class="w-1/7">
                        @include('_sidebar-links')
                    </div>
                @endif
                <div class="flex-1 mx-10" style="max-width: 700px">
{{--                    @yield('content')--}}
                    {{ $slot }}
                </div>
                @if(auth()->check())
                    <div class="w-1/5 bg-gray-200 rounded-2xl px-8 py-6">
                        @include('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
