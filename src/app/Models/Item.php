<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'name',
        'price',
        'stock',
        'image',
        'description'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
