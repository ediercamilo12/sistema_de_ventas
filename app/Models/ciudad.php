<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'departamento_id'];

    public function ciudad() {
        return $this->hasMany(ciudad::class);
    }
}
