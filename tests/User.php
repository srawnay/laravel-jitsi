<?php

namespace Srawnay\LaravelJitsi\Tests;

use Srawnay\LaravelJitsi\Traits\HasJitsiAttributes;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthorizableContract, AuthenticatableContract
{
    use Authorizable, Authenticatable, HasJitsiAttributes;

    protected $guarded = [];

    protected $table = 'users';
}
