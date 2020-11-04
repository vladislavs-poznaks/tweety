<h3 class="font-bold text-xl">Following</h3>

<ul class="space-y-4 mt-4">
    @foreach(auth()->user()->follows as $user)
        <li>
            <a
                href="{{ route('profiles.show', ['user' => $user]) }}"
                class="flex items-center text-sm space-x-5">
                <img
                    src="{{ $user->avatar }}"
                    alt="avatar"
                    class="w-8 rounded-full"
                >
                <span>{{ $user->name }}</span>
            </a>
        </li>
    @endforeach
</ul>
