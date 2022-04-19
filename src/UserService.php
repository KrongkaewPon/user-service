<?php

namespace Services;

use App\Services\ApiService;

class UserService extends ApiService
{
    protected string $endpoint;

    public function __construct()
    {
        $this->endpoint = env('USERS_MS', 'http://users_ms:8000') . '/api';
    }
}
