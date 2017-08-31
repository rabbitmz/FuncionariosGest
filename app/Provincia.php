<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $table = 'provincia';

    public function distritos()
    {
       return $this->hasMany('App\Distrito');
    }
}
