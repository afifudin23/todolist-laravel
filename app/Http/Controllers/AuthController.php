<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(): Response
    {
        return response()->view('auth.login', [
            "title" => "Login"
        ]);
    }

    public function onLogin(Request $request): Response|RedirectResponse
    {
        $username = $request->input("username");
        $password = $request->input("password");

        // validate login
        if (empty($username) || empty($password)) {
            return response()->view('auth.login', [
                "title" => "Login",
                "error" => "Username or password is required"
            ]);
        }

        return response()->redirectTo("/dashboard");
    }

    public function onLogout() {}
}
