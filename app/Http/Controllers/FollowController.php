<?php

namespace App\Http\Controllers;

use App\Models\User;

class FollowController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->follows()->toggle($user);

        return redirect(route('profiles.show', ['user' => $user]));
    }
}
