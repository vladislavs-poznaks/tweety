<div class="border border-gray-400 rounded-2xl">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="px-6 py-4"> No tweets yet..</p>
    @endforelse
</div>
