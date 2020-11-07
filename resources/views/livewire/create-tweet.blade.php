<div>
    <form action="{{ route('tweets.store') }}" method="POST">
        @csrf
        <textarea
            name="body"
            placeholder="What's up doc?!"
            wire:model="input"
            required
            class="w-full h-28 focus:outline-none"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <div class="flex space-x-3">
                <img
                    src="{{ auth()->user()->avatar }}"
                    alt="avatar"
                    class="w-10 rounded-full"
                >
                <span class="text-sm {{ $isOver ? 'text-red-500' : 'text-gray-500' }}">Characters remaining: {{ $remainingChars }}</span>
            </div>

            <button
                type="submit"
                class="bg-blue-400 text-white rounded-full shadow px-3 py-2"
            >Tweet-a-roo!</button>
        </footer>

    </form>
</div>
