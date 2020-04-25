<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::all()->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'created_at' => $user->created_at,
                    'edit_url' => route('users.edit', $user),
                ];
            }),
            'create_url' => route('users.create'),
        ]);
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Show', [
            'user' => $user,
            'update_url' => route('users.update', $user),
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index');
    }
}
