<div class="{{ $loop->last ? '' : 'border-b'}} border-gray-400 px-4 py-4">
    <div class="flex space-x-3">
        <div class="flex-shrink-0">
            <a href="{{ route('profiles.show', ['user' => $tweet->user]) }}">
                <img
                    src="{{ $tweet->user->avatar }}"
                    alt="avatar"
                    class="w-10 rounded-full"
                >
            </a>
        </div>
        <div class="w-full">
            <div class="flex items-center">
                <a
                    class="mr-2"
                    href="{{ route('profiles.show', ['user' => $tweet->user]) }}"
                >
                    <h5 class="font-bold">{{ $tweet->user->name }}</h5>
                </a>
                &middot;
                <span class="text-sm ml-2">{{ $tweet->created_at->diffForHumans() }}</span>
            </div>
            <a href="{{ route('profiles.show', ['user' => $tweet->user]) }}">
                <h6 class="text-sm text-gray-600">{{ '@' . $tweet->user->username }}</h6>
            </a>
            <p class="text-sm mt-1">{{ $tweet->body }}</p>

            <div class="flex justify-between items-center w-full">
                <x-like-buttons :tweet="$tweet"/>
                @if($tweet->user->is(auth()->user()))
                <x-delete-button :tweet="$tweet"/>
                @endif
            </div>
        </div>
    </div>
</div>
