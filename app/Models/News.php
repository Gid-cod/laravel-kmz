<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','info','Short_description','type_id','created_at'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
