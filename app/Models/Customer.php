<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    // Свойство $fillable указывает, какие поля должны быть доступны при массовом заполнении. Их можно указать на уровне класса или объекта.
    protected $fillable = [
        'name',
        'block',
        'surname',
        'email',
        'phone',
        'reg',
    ];
    public function address(): HasMany
    {
        return $this->hasMany('App\Models\Address', 'customer_id');
    }
}
