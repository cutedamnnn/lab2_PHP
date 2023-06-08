<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    // Свойство $fillable указывает, какие поля должны быть доступны при массовом заполнении. Их можно указать на уровне класса или объекта.
    protected $fillable = [
        'title',
        'city',
        'street',
        'house',
        'floor',
        'room',
        'code',
        'reg',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}
