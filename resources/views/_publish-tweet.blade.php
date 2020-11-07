<div class="border border-blue-400 rounded-2xl px-8 py-4 mb-6">
    <livewire:create-tweet />
    @error('body')
        <div class="text-sm text-red-400 mt-3">
            {{ $message }}
        </div>
    @enderror
</div>
