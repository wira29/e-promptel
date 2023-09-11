<?php

namespace App\Helpers;

class UserHelper
{

    /**
     * Get Current User Roles
     *
     * @return string
     */

    public static function getCurrentRoles(): string
    {
        return auth()->user()->roles->pluck('name')[0];
    }
}
