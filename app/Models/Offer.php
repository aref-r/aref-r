<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
         'amount', 'fee', 'user_id', 'updated_at', 'created_at','order_id',
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }


}
