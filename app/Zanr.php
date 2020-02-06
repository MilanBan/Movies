<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    public function movies(){
        return $this->hasMany(Movies::class);
    }
}
