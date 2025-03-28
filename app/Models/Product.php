<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use CrudTrait;
    protected $fillable = [
        'name',
        'sku',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
