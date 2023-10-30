<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\Enums\RoleName;
use App\Models\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function getVendorUser(): User
    {
        return User::whereHas('roles', function ($query) {
            $query->where('name', RoleName::VENDOR);
        })->first();
    }

}
