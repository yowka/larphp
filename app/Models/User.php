<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
    'name', 'surname', 'patronymic', 'login', 'email', 'password', 'is_admin',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
