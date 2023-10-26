<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
    public function origin_countries()
    {
        return $this->belongsToMany(Origin_country::class);
    }
    public function people()
    {
        return $this->belongsToMany(Person::class);
    }
    public function movie_status()
    {
        return $this->belongsTo(Movie_status::class);
    }
    public function movie_type()
    {
        return $this->belongsTo(Movie_type::class);
    }
}
