<x-app>
    <header class="mb-6">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                alt="Your Banner"
            >
            <img
                src="{{ $user->avatar }}"
                alt="avatar"
                class="w-40 rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
            >
        </div>

        <div class="flex justify-between items-center mt-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex space-x-4">
                @can('edit', $user)
                <a
                    href="{{ route('profiles.edit', ['user' => $user]) }}"
                    class="bg-gray-500 text-white rounded-full shadow px-5 py-3"
                >Edit Profile</a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm text-center mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae harum iusto nemo non provident, quam quos soluta! Consequatur eligendi expedita ipsa omnis optio quis.
        </p>
    </header>

    @include('_timeline')
</x-app>
