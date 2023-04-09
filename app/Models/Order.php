<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    protected $guarded = false;

    protected $casts = [
        'items' => 'array'
    ];
}
