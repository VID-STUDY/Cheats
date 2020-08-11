<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('pages.account.index', compact('user'));
    }

    public function settings()
    {
        $user = auth()->user();
        return view('pages.account.settings', compact('user'));
    }

    public function storeSettings(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed'
        ]);

        $user = Auth::user();
        $name = $request->get('name');
        $user->name = $name;
        $password = $request->get('password');
        if ($password)
            $user->password = Hash::make($password);

        $user->save();
        return redirect()->route('account');
    }
}
