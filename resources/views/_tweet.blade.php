<div class="flex {{ $loop->last ? '' : 'border-b'}} border-gray-400 space-x-3 px-4 py-4">
    <div class="flex-shrink-0">
        <a href="{{ route('profiles.show', ['user' => $tweet->user]) }}">
            <img
                src="https://i.pravatar.cc/300?u={{ $tweet->user->email }}"
                alt="avatar"
                class="w-10 rounded-full"
            >
        </a>
    </div>
    <div class="space-y-3">
        <a href="{{ route('profiles.show', ['user' => $tweet->user]) }}">
            <h5 class="font-bold">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm">{{ $tweet->body }}</p>

    </div>
</div>
