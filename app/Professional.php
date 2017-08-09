<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    //
	protected $table = 'professional';
	
	public function professions()
	{
		return $this->belongsToMany('App\Profissao','professional_profissao');
	}
	

}
