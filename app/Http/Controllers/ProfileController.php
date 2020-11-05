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
            'tweets' => $user->tweets
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
            'avatar' => $request->avatar->store('avatars')
        ]);

        return redirect(route('profiles.show', [
            'user' => $user
        ]));
    }
}
