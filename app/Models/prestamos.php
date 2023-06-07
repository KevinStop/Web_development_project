<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    public function usuario()
    {
        return $this->belongsTo(usuarios::class);
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    use HasFactory;
}
