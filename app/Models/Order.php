<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'type', 'currency_id', 'amount', 'fee', 'user_id', 'updated_at', 'created_at',
    ];


    public function currency()
    {
        return $this->belongsTo(Currency::class);

    }
}
