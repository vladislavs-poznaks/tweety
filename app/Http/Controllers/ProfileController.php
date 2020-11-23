<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()
                ->withLikes()
                ->paginate(50)
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', [
            'user' => $user
        ]);
    }

    public function update(ProfileUpdateRequest $request, User $user)
    {
        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        if ($request->avatar) {
            $user->update([
                'avatar' => $request->avatar->store('avatars')
            ]);
        }

        if ($request->banner) {
            $user->update([
                'banner' => $request->banner->store('banners')
            ]);
        }

        return redirect(route('profiles.show', [
            'user' => $user
        ]));
    }
}
