<div class="text-xs mt-3">
    <form action="{{ route('tweet.destroy', $tweet) }}" method="POST">
        @csrf
        @method('DELETE')
        <div
            class="px-3 py-2 rounded-full text-red-500 bg-red-200">

            <button type="submit" class="flex items-baseline space-x-1">
                <svg class="w-3 fill-current" viewBox="0 0 20 20"><path d="M0 10a10 10 0 1 1 20 0 10 10 0 0 1-20 0zm16.32-4.9L5.09 16.31A8 8 0 0 0 16.32 5.09zm-1.41-1.42A8 8 0 0 0 3.68 14.91L14.91 3.68z"></path></svg>
            </button>
        </div>
    </form>
</div>
