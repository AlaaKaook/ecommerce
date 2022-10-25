<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = "order_product";

    protected $guarded =[];


    public function productes() : BelongsTo
    {
        return $this->belongsTo(Producte::class , 'producte_id' , 'id');
    }

}
