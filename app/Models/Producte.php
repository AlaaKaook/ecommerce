<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    use HasFactory;
    protected $table ="productes" ;

    protected $guarded =[];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function orders()
{
    return $this->belongsToMany(Order::class);
}
}
