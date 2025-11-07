<?php

namespace Tests\Feature;

use App\Services\AuthService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthServiceTest extends TestCase
{
    private AuthService $authService;
    public function setUp(): void
    {
        parent::setUp();
        $this->authService = $this->app->make(AuthService::class);
    }

    public function testLoginSuccess()
    {
        self::assertTrue($this->authService->login("andev", "123"));
    }

    public function testLoginFailed()
    {
        self::assertNotTrue($this->authService->login("andev", "1234"));
    }
}
