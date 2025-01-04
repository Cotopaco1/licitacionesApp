<?php

namespace App\Models;

use App\Models\Supplier;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'unit_price_withouth_tax',
        'description',
        'unit_of_measure',
        'brand',
        'notes',
        'url_data',
        'supplier_id',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
