<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'description',
        'movie_type_id'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function category()
    {
        return $this->hasOne(MovieType::class, 'id', 'movie_type_id');
    }
}
