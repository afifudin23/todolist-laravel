<?php

namespace App\Services\Impl;

use App\Services\AuthService;

class AuthServiceImpl implements AuthService
{
    private array $users = [
        "andev" => "123"
    ];
    public function login(string $username, string $password) {
        if(!isset($this->users[$username])){
            return false;
        }

        $correctPassword = $this->users[$username];
        return $password === $correctPassword;
    }
}
