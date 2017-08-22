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
	public function identificationDocumentType()
	{
		return $this->belongsTo('App\Tipo_documento','tipo_documento_id');
	}
	public function naturality()
	{
		return $this->belongsTo('App\Provincia','naturalidade_provincia_id');
	}
}
