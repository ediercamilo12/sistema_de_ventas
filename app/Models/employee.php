<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'identification_card', 'cities_id'];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
