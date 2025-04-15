<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
    'name', 'surname', 'patronymic', 'login', 'email', 'password', 'is_admin',
    ];
    public function isAdmin()
    {
        return $this->role_id === 1; // Предполагается, что ID роли "admin" равен 1
    }

    public function isClient()
    {
        return $this->role_id === 2; // Предполагается, что ID роли "client" равен 2
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
