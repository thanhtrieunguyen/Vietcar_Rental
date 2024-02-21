<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'iduser';

    protected $guarded = [];

    protected $hidden = [
        'password'
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'idrole', 'idrole');
    }

    public function danhgia()
    {
        return $this->hasMany('App\Models\Comment', 'iddanhgia', 'iddanhgia');
    }
}
