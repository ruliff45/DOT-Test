<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->query();
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->get();
            return $user;
        }
    }
}
