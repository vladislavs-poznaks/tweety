<x-app>
    <div class="border border-gray-400 rounded-2xl">
        @forelse($users as $user)
            @unless(auth()->user()->is($user))
                @include('_explore-card')
            @endunless
        @empty
            <p class="px-6 py-4"> No one here yet..</p>
        @endforelse
    </div>
</x-app>
