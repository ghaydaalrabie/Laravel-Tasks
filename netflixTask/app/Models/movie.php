<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;


    public function genre()
    {
        return $this->belongsTo(genre::class, 'movie_gener');
    }

    protected $fillable = [
        'movie_name',
        'movie_description',
        'movie_img',
        'movie_gener'
    ];
}
