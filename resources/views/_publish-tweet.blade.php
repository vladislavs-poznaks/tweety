<div class="border border-blue-400 rounded-2xl px-8 py-4 mb-6">
    <form action="{{ route('tweets.store') }}" method="POST">
        @csrf
                    <textarea
                        name="body"
                        placeholder="What's up doc?!"
                        required
                        class="w-full h-32 focus:outline-none"
                    ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                class="w-12 rounded-full"
            >
            <button
                type="submit"
                class="bg-blue-400 text-white rounded-full shadow px-3 py-2"
            >Tweet-a-roo!</button>
        </footer>
    </form>
    @error('body')
        <div class="text-sm text-red-400 mt-3">
            {{ $message }}
        </div>
    @enderror
</div>
