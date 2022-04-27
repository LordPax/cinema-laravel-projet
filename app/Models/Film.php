<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Film extends Model {
    use HasFactory;
    protected $primaryKey = "id_film";

    public function genre() {
        return $this->belongsTo(Genre::class, 'id_genre');
    }
}
