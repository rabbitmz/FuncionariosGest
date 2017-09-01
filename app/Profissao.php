<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Profissao extends Model
{
	//
	protected $table = 'profissao';

	public function anosExperiencia($inicio, $fim)
	{
		$end_date = Carbon::parse($this->data_fim);
		$inicio_date= Carbon::parse($this->data_inicio);

		$lengthOfAd = $end_date->diffInDays($inicio_date);
		return $lengthOfAd;
	}

	public function profissionais()
	{
		return $this->belongsToMany(Professional::class,'professional_profissao','profissao_id','professional_id');
	}

	public function nivelProfissional()
	{
		  return $this->belongsToMany(Nivel_professional::class,'professional_profissao','profissao_id','professional_id');
	}
}
