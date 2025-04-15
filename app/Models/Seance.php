<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'available_tickets', 'show_date', 'age_restriction', 'image', 'genre_id',
    ];
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}

