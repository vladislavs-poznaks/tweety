<x-app>
    <div class="bg-gray-200 rounded-2xl mx-10">
        <h3 class="text-center font-bold text-lg pt-4">Edit Your Profile</h3>
        <form
            action="{{ route('profiles.update', ['user' => $user]) }}"
            method="POST"
            enctype="multipart/form-data"
            class="px-8 py-4 space-y-4"
        >
            @csrf
            @method('PATCH')



            <div class="space-y-2">
                <label for="username" class="">{{ __('Username') }}</label>
                <input
                    id="username"
                    type="text"
                    class="text-sm rounded-full w-full px-2 py-2 focus:outline-none focus:shadow-outline
                    @error('username') is-invalid @enderror"
                    name="username"
                    value="{{ $user->username }}"
                    required
                    autocomplete="username"
                    autofocus
                >
            </div>
            @error('username')
            <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror

            <div class="space-y-2">
                <label for="name" class="">{{ __('Name') }}</label>
                <input
                    id="name"
                    type="text"
                    class="text-sm rounded-full w-full px-2 py-2 focus:outline-none focus:shadow-outline
                    @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ $user->name }}"
                    required
                    autocomplete="name"
                    autofocus
                >
            </div>
            @error('name')
            <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror

            <div class="space-y-2">
                <label for="email" class="">{{ __('Email') }}</label>
                <input
                    id="email"
                    type="email"
                    class="text-sm rounded-full w-full px-2 py-2 focus:outline-none focus:shadow-outline
                    @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ $user->email }}"
                    required
                    autocomplete="email"
                    autofocus
                >
            </div>
            @error('email')
            <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror

            <div class="flex items-center space-x-4">
                <img
                    src="{{ $user->avatar }}"
                    alt="Your Avatar"
                    class="w-16 rounded-full"
                >
                <div>
                    <div class="space-y-2">
                        <input
                            type="file"
                            class="text-sm rounded-full w-full px-2 py-2 focus:outline-none focus:shadow-outline
                    @error('avatar') is-invalid @enderror"
                            name="avatar"
                            autocomplete="avatar"
                            autofocus
                        >
                    </div>
                    @error('avatar')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

{{--            <div class="space-y-2">--}}
{{--                <label for="password" class="">{{ __('Password') }}</label>--}}
{{--                <input--}}
{{--                    id="password"--}}
{{--                    type="password"--}}
{{--                    class="text-sm rounded-full w-full px-2 py-2 focus:outline-none focus:shadow-outline--}}
{{--                    @error('password') is-invalid @enderror"--}}
{{--                    name="password"--}}
{{--                    value="{{ old('password') }}"--}}
{{--                    autocomplete="password"--}}
{{--                    autofocus--}}
{{--                >--}}
{{--            </div>--}}
{{--            @error('email')--}}
{{--            <div class="text-sm text-red-500">{{ $message }}</div>--}}
{{--            @enderror--}}

{{--            <div class="space-y-2">--}}
{{--                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>--}}
{{--                <input--}}
{{--                    id="password-confirm"--}}
{{--                    type="password"--}}
{{--                    class="text-sm rounded-full w-full px-2 py-2 focus:outline-none focus:shadow-outline--}}
{{--                    @error('password-confirm') is-invalid @enderror"--}}
{{--                    name="password_confirmation"--}}
{{--                    value="{{ old('password') }}"--}}
{{--                    autocomplete="password"--}}
{{--                    autofocus--}}
{{--                >--}}
{{--            </div>--}}
{{--            @error('password-confirm')--}}
{{--            <div class="text-sm text-red-500">{{ $message }}</div>--}}
{{--            @enderror--}}

            <div class="text-center pb-4 space-x-4">
                <button
                    type="submit"
                    class="bg-blue-400 text-white rounded-full shadow px-6 py-3 mt-3"
                >Update
                </button>
                <a
                    href="{{ route('profiles.show', $user) }}"
                    class="text-gray-700 hover:text-gray-900"
                >Cancel</a>
            </div>

        </form>
    </div>
</x-app>
