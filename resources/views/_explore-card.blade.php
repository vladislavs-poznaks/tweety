<div class="flex {{ $loop->last ? '' : 'border-b' }} border-gray-400 justify-between items-center">
    <div class="flex px-4 py-4 space-x-4">
        <a href="{{ route('profiles.show', $user) }}">
            <img
                src="{{ $user->avatar }}"
                alt="{{ $user->name }}'s avatar"
                class="w-12 rounded-full"
            >
        </a>
        <div>
            <div>
                <a href="{{ route('profiles.show', $user) }}" class="font-semibold">
                    {{ $user->name }}
                </a>
            </div>
            <div>
                <a href="{{ route('profiles.show', $user) }}" class="text-sm">
                    {{ '@' . $user->username }}
                </a>
            </div>
        </div>
    </div>
    <div class="px-4">
        <x-follow-button :user="$user"></x-follow-button>
    </div>
</div>
