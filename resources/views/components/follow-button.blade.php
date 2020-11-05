@unless(auth()->user()->is($user))
    <form action="{{ route('profiles.follow', ['user' => $user]) }}" method="POST">
        @csrf
        <button
            type="submit"
            class="bg-blue-400 text-white rounded-full shadow px-5 py-3"
        >{{ auth()->user()->isFollowing($user) ? 'Unfollow' : 'Follow' }}
        </button>
    </form>
@endunless
