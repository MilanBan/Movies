<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];
    
    protected $fillable = [
        'title',
        'zanr',
        'reziser',
        'godina',
        'stiryline',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function zanr(){
        return $this->belongsTo(Zanr::class);
    } 

    public function getAllMovies(){
        $movies = Movie::all();
    }
}
