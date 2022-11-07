<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'number',
        'description',
        'options',
    ];

    protected $casts = [
        'options' => AsCollection::class,
    ];

    public function driver()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
