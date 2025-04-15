<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'user_id', 'status', 'cancel_reason',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function seances()
    {
        return $this->belongsTo(Seance::class);
    }
}
