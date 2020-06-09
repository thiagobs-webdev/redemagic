<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
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

    /**
     * The roles that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'movie_has_user', 'movie_id', 'user_id');
    }
}
