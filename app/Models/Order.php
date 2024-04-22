<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'total_price',
        'delivery_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function meals(){
        return $this->belongsToMany(Meal::class , 'order_meal');
    }

    public function payments(){
        return $this->hasOne(Payment::class);
    }

}
