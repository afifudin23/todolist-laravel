<?php

namespace App\Services;

interface AuthService 
{
    public function login(string $username, string $password);
}